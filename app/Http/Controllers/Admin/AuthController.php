<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminOtpService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
        private readonly AdminOtpService $adminOtp
    ) {}

    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }

        if ($this->adminOtp->hasPendingVerification() && ! $this->adminOtp->isExpired()) {
            return redirect()->route('admin.login.verify');
        }

        $this->adminOtp->clear();

        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::validate($credentials)) {
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ])->onlyInput('email');
        }

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! $user->is_admin) {
            return back()->withErrors([
                'email' => 'You do not have admin access.',
            ])->onlyInput('email');
        }

        $delivery = $this->adminOtp->issueForUser($user, $request->boolean('remember'));

        if (! $delivery['sms_sent'] && ! $delivery['email_sent']) {
            $this->adminOtp->clear();

            return back()->withErrors([
                'email' => 'We could not send the verification code by SMS or email. On the server, check SMS_API_* credentials (quote passwords with #) and set MAIL_MAILER to a real SMTP mailer — MAIL_MAILER=log does not deliver codes.',
            ])->onlyInput('email');
        }

        $request->session()->save();

        return redirect()
            ->route('admin.login.verify')
            ->with('status', $this->otpSentMessage($delivery));
    }

    private function otpSentMessage(array $delivery): string
    {
        $parts = [];

        if ($delivery['sms_sent']) {
            $parts[] = 'phone ('.$this->adminOtp->maskedPhone().')';
        }

        if ($delivery['email_sent'] && $this->adminOtp->emailDeliversToInbox()) {
            $parts[] = 'email ('.$this->adminOtp->maskedEmail().')';
        }

        if ($parts === []) {
            return 'A verification code has been sent.';
        }

        return 'A verification code has been sent to your '.implode(' and ', $parts).'. SMS delivery may take up to 2 minutes.';
    }

    public function showVerifyOtp(): View|RedirectResponse
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }

        if (! $this->adminOtp->hasPendingVerification() || $this->adminOtp->isExpired()) {
            $this->adminOtp->clear();

            return redirect()
                ->route('admin.login')
                ->withErrors(['email' => 'Your verification session expired. Please sign in again.']);
        }

        return view('admin.auth.verify-otp', [
            'maskedPhone' => $this->adminOtp->maskedPhone(),
            'maskedEmail' => $this->adminOtp->maskedEmail(),
            'smsSent' => (bool) session('admin_otp_sms_sent'),
            'emailSent' => (bool) session('admin_otp_email_sent') && $this->adminOtp->emailDeliversToInbox(),
        ]);
    }

    public function verifyOtp(Request $request): RedirectResponse
    {
        $request->validate([
            'otp' => ['required', 'digits:6'],
        ]);

        if (! $this->adminOtp->hasPendingVerification()) {
            return redirect()
                ->route('admin.login')
                ->withErrors(['email' => 'Please sign in again to receive a new code.']);
        }

        if ($this->adminOtp->isExpired()) {
            $this->adminOtp->clear();

            return redirect()
                ->route('admin.login')
                ->withErrors(['email' => 'Your verification code expired. Please sign in again.']);
        }

        $user = $this->adminOtp->verify($request->input('otp'));

        if (! $user) {
            return back()->withErrors([
                'otp' => 'Invalid verification code. Please try again.',
            ]);
        }

        $remember = $this->adminOtp->rememberLogin();
        $this->adminOtp->clear();

        Auth::login($user, $remember);
        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function resendOtp(): RedirectResponse
    {
        if (! $this->adminOtp->resend()) {
            $this->adminOtp->clear();

            return redirect()
                ->route('admin.login')
                ->withErrors(['email' => 'Your verification session expired. Please sign in again.']);
        }

        return back()->with('status', $this->otpSentMessage([
            'sms_sent' => (bool) session('admin_otp_sms_sent'),
            'email_sent' => (bool) session('admin_otp_email_sent'),
        ]));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $this->adminOtp->clear();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
