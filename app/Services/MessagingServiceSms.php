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
        $from = (string) config('admin_auth.sms.from', 'EmCaTech');

        // Official NextSMS / Messaging Service API (POST + Basic Auth).
        if ($this->sendViaApi($username, $password, $from, $phone, $message)) {
            return true;
        }

        // Legacy HTTP GET "link" endpoint as a fallback for older accounts.
        return $this->sendViaLinkEndpoint($username, $password, $from, $phone, $message);
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

    private function sendViaApi(string $username, string $password, string $from, string $phone, string $message): bool
    {
        $url = $this->apiEndpoint('/api/sms/v1/text/single');

        try {
            $response = Http::timeout(30)
                ->withBasicAuth($username, $password)
                ->asForm()
                ->post($url, [
                    'from' => $from,
                    'to' => $phone,
                    'text' => $message,
                ]);
        } catch (\Throwable $exception) {
            Log::error('SMS API request exception.', [
                'phone' => $phone,
                'message' => $exception->getMessage(),
            ]);

            return false;
        }

        return $this->interpretResponse($response->status(), $response->body(), $phone, 'api');
    }

    private function sendViaLinkEndpoint(string $username, string $password, string $from, string $phone, string $message): bool
    {
        $base = (string) config('admin_auth.sms.base_url');

        if (str_contains($base, '/link/')) {
            $url = rtrim($base, '?');
        } else {
            $url = $this->apiEndpoint('/link/sms/v1/text/single');
        }

        $query = http_build_query([
            'username' => $username,
            'password' => $password,
            'from' => $from,
            'to' => $phone,
            'text' => $message,
        ], '', '&', PHP_QUERY_RFC3986);

        try {
            $response = Http::timeout(30)
                ->withOptions(['allow_redirects' => true])
                ->get($url.'?'.$query);
        } catch (\Throwable $exception) {
            Log::error('SMS link endpoint exception.', [
                'phone' => $phone,
                'message' => $exception->getMessage(),
            ]);

            return false;
        }

        return $this->interpretResponse($response->status(), $response->body(), $phone, 'link');
    }

    private function apiEndpoint(string $path): string
    {
        $base = rtrim((string) config('admin_auth.sms.base_url'), '/');

        // Allow either host root or a full legacy link URL in .env.
        if (preg_match('#https?://[^/]+#', $base, $matches)) {
            $origin = $matches[0];
        } else {
            $origin = 'https://messaging-service.co.tz';
        }

        return $origin.$path;
    }

    private function interpretResponse(int $status, string $body, string $phone, string $channel): bool
    {
        $payload = json_decode($body, true);

        if (is_array($payload) && array_key_exists('success', $payload) && ! $payload['success']) {
            Log::error('SMS provider rejected request.', [
                'channel' => $channel,
                'phone' => $phone,
                'status' => $status,
                'error' => $payload['error'] ?? $body,
            ]);

            return false;
        }

        if (is_array($payload) && isset($payload['messages'][0]['status']['groupName'])) {
            $group = strtoupper((string) $payload['messages'][0]['status']['groupName']);
            if (in_array($group, ['REJECTED', 'UNDELIVERABLE', 'EXPIRED'], true)) {
                Log::error('SMS provider message status rejected.', [
                    'channel' => $channel,
                    'phone' => $phone,
                    'status' => $status,
                    'body' => $body,
                ]);

                return false;
            }
        }

        if ($status < 200 || $status >= 300) {
            Log::error('SMS provider HTTP failure.', [
                'channel' => $channel,
                'phone' => $phone,
                'status' => $status,
                'body' => $body,
            ]);

            return false;
        }

        Log::info('Admin OTP SMS sent.', [
            'channel' => $channel,
            'phone' => $phone,
            'response' => $body,
        ]);

        return true;
    }
}
