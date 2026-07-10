<?php

namespace App\Services;

use App\Mail\AdminLoginOtpMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AdminOtpService
{
    public function __construct(
        private readonly MessagingServiceSms $sms
    ) {}

    /**
     * @return array{sms_sent: bool, email_sent: bool}
     */
    public function issueForUser(User $user, bool $remember): array
    {
        $otp = (string) random_int(100000, 999999);
        $expiryMinutes = config('admin_auth.otp_expiry_minutes', 10);

        session([
            'admin_pending_user_id' => $user->id,
            'admin_pending_remember' => $remember,
            'admin_otp_hash' => Hash::make($otp),
            'admin_otp_expires_at' => now()->addMinutes($expiryMinutes)->timestamp,
            'admin_otp_attempts' => 0,
            'admin_otp_sms_sent' => false,
            'admin_otp_email_sent' => false,
        ]);

        $delivery = $this->deliverOtp($user, $otp, $expiryMinutes);

        session([
            'admin_otp_sms_sent' => $delivery['sms_sent'],
            'admin_otp_email_sent' => $delivery['email_sent'],
        ]);

        if (config('app.debug')) {
            Log::info('Admin OTP generated (local debug).', ['otp' => $otp]);
        }

        return $delivery;
    }

    /**
     * @return array{sms_sent: bool, email_sent: bool}
     */
    public function deliverOtp(User $user, string $otp, ?int $expiryMinutes = null): array
    {
        $expiryMinutes ??= config('admin_auth.otp_expiry_minutes', 10);
        $message = "EmCa code: {$otp}";

        $smsSent = $this->sms->send(config('admin_auth.otp_phone'), $message);
        $emailSent = $this->sendEmailOtp($user, $otp, $expiryMinutes);

        if (! $smsSent && ! $emailSent) {
            Log::error('Admin OTP could not be delivered via SMS or email.', [
                'user_id' => $user->id,
            ]);
        }

        return [
            'sms_sent' => $smsSent,
            'email_sent' => $emailSent,
        ];
    }

    public function verify(string $otp): ?User
    {
        if ($this->isExpired()) {
            $this->clear();

            return null;
        }

        $attempts = (int) session('admin_otp_attempts', 0);
        if ($attempts >= config('admin_auth.otp_max_attempts', 5)) {
            $this->clear();

            return null;
        }

        session(['admin_otp_attempts' => $attempts + 1]);

        if (! Hash::check($otp, (string) session('admin_otp_hash'))) {
            return null;
        }

        $userId = session('admin_pending_user_id');
        $user = $userId ? User::find($userId) : null;

        if (! $user || ! $user->is_admin) {
            $this->clear();

            return null;
        }

        return $user;
    }

    public function rememberLogin(): bool
    {
        return (bool) session('admin_pending_remember', false);
    }

    public function hasPendingVerification(): bool
    {
        return filled(session('admin_pending_user_id')) && filled(session('admin_otp_hash'));
    }

    public function isExpired(): bool
    {
        $expiresAt = (int) session('admin_otp_expires_at', 0);

        return $expiresAt > 0 && now()->timestamp > $expiresAt;
    }

    public function clear(): void
    {
        session()->forget([
            'admin_pending_user_id',
            'admin_pending_remember',
            'admin_otp_hash',
            'admin_otp_expires_at',
            'admin_otp_attempts',
            'admin_otp_sms_sent',
            'admin_otp_email_sent',
        ]);
    }

    public function resend(): bool
    {
        if (! $this->hasPendingVerification() || $this->isExpired()) {
            return false;
        }

        $user = User::find(session('admin_pending_user_id'));

        if (! $user || ! $user->is_admin) {
            return false;
        }

        $otp = (string) random_int(100000, 999999);
        $expiryMinutes = config('admin_auth.otp_expiry_minutes', 10);

        $delivery = $this->deliverOtp($user, $otp, $expiryMinutes);

        session([
            'admin_otp_hash' => Hash::make($otp),
            'admin_otp_expires_at' => now()->addMinutes($expiryMinutes)->timestamp,
            'admin_otp_attempts' => 0,
            'admin_otp_sms_sent' => $delivery['sms_sent'],
            'admin_otp_email_sent' => $delivery['email_sent'],
        ]);

        if (config('app.debug')) {
            Log::info('Admin OTP resent (local debug).', ['otp' => $otp]);
        }

        return $delivery['sms_sent'] || $delivery['email_sent'];
    }

    public function deliveryChannels(): array
    {
        $channels = [];

        if (session('admin_otp_sms_sent')) {
            $channels[] = 'sms';
        }

        if (session('admin_otp_email_sent') && $this->emailDeliversToInbox()) {
            $channels[] = 'email';
        }

        return $channels;
    }

    public function emailDeliversToInbox(): bool
    {
        return config('mail.default') !== 'log';
    }

    public function maskedPhone(): string
    {
        $phone = $this->sms->normalizePhone((string) config('admin_auth.otp_phone'));

        return '+***'.substr($phone, -4);
    }

    public function maskedEmail(): string
    {
        $email = (string) config('admin_auth.otp_email');

        if (! str_contains($email, '@')) {
            return $email;
        }

        [$local, $domain] = explode('@', $email, 2);
        $visible = substr($local, 0, min(2, strlen($local)));

        return $visible.'***@'.$domain;
    }

    private function sendEmailOtp(User $user, string $otp, int $expiryMinutes): bool
    {
        $email = config('admin_auth.otp_email');

        if (blank($email)) {
            return false;
        }

        try {
            Mail::to($email)->send(new AdminLoginOtpMail($otp, $user->name, $expiryMinutes));

            Log::info('Admin OTP email sent.', ['email' => $email]);

            return true;
        } catch (\Throwable $exception) {
            Log::error('Admin OTP email failed.', [
                'email' => $email,
                'message' => $exception->getMessage(),
            ]);

            return false;
        }
    }
}
