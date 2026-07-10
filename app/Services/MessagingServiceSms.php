<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MessagingServiceSms
{
    public function send(string $phone, string $message): bool
    {
        $username = config('admin_auth.sms.username');
        $password = config('admin_auth.sms.password');

        if (blank($username) || blank($password)) {
            Log::warning('SMS not sent: SMS API credentials are not configured.');

            return false;
        }

        $phone = $this->normalizePhone($phone);

        $query = http_build_query([
            'username' => $username,
            'password' => $password,
            'from' => config('admin_auth.sms.from', 'EmCaTech'),
            'to' => $phone,
            'text' => $message,
        ], '', '&', PHP_QUERY_RFC3986);

        $url = rtrim((string) config('admin_auth.sms.base_url'), '?').'?'.$query;

        $response = Http::timeout(30)
            ->withOptions([
                'allow_redirects' => true,
            ])
            ->get($url);

        $body = $response->body();
        $payload = json_decode($body, true);

        if (is_array($payload) && array_key_exists('success', $payload) && ! $payload['success']) {
            Log::error('SMS API rejected request.', [
                'phone' => $phone,
                'status' => $response->status(),
                'error' => $payload['error'] ?? $body,
            ]);

            return false;
        }

        if (! $response->successful()) {
            Log::error('SMS API request failed.', [
                'phone' => $phone,
                'status' => $response->status(),
                'body' => $body,
            ]);

            return false;
        }

        Log::info('Admin OTP SMS sent.', [
            'phone' => $phone,
            'response' => $body,
        ]);

        return true;
    }

    public function normalizePhone(string $phone): string
    {
        $digits = preg_replace('/\D/', '', $phone) ?? '';

        if (str_starts_with($digits, '0')) {
            $digits = '255'.substr($digits, 1);
        }

        if (! str_starts_with($digits, '255')) {
            $digits = '255'.$digits;
        }

        return $digits;
    }
}
