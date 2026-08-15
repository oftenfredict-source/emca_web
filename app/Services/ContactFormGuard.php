<?php

namespace App\Services;

use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class ContactFormGuard
{
    public function assertNotSpam(Request $request): void
    {
        if ($this->honeypotFilled($request)) {
            throw ValidationException::withMessages([
                'message' => 'Unable to send your message. Please try again.',
            ]);
        }

        if (! $this->formAgeLooksHuman($request)) {
            throw ValidationException::withMessages([
                'message' => 'Please take a moment to complete the form, then try again.',
            ]);
        }

        if ($this->recaptchaEnabled()) {
            $this->assertRecaptcha($request);

            return;
        }

        if (! $request->boolean('not_robot')) {
            throw ValidationException::withMessages([
                'not_robot' => 'Please confirm you are not a robot.',
            ]);
        }
    }

    public function honeypotFilled(Request $request): bool
    {
        $value = trim((string) $request->input('website_url', ''));

        return $value !== '';
    }

    public function formAgeLooksHuman(Request $request): bool
    {
        $startedAt = (int) $request->input('form_started_at', 0);

        if ($startedAt <= 0) {
            return false;
        }

        $age = time() - $startedAt;

        // Too fast (bot) or absurdly old/stale token.
        return $age >= 3 && $age <= 60 * 60 * 6;
    }

    public function recaptchaEnabled(): bool
    {
        return filled(config('services.recaptcha.site_key'))
            && filled(config('services.recaptcha.secret_key'));
    }

    public function assertRecaptcha(Request $request): void
    {
        $token = (string) $request->input('g-recaptcha-response', '');

        if ($token === '') {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Please complete the “I’m not a robot” check.',
            ]);
        }

        try {
            $response = Http::asForm()
                ->timeout(8)
                ->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $token,
                    'remoteip' => $request->ip(),
                ])
                ->throw()
                ->json();
        } catch (RequestException $exception) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Robot check temporarily unavailable. Please try again.',
            ]);
        }

        if (! ($response['success'] ?? false)) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Robot check failed. Please try again.',
            ]);
        }
    }
}
