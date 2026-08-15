<?php

namespace App\Services;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\ValidationException;

class ContactFormGuard
{
    public function makeMathChallenge(): array
    {
        $left = random_int(1, 9);
        $right = random_int(1, 9);

        return [
            'left' => $left,
            'right' => $right,
            'token' => Crypt::encrypt([
                'answer' => $left + $right,
                'exp' => now()->addHours(2)->getTimestamp(),
            ]),
        ];
    }

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

        $this->assertMathChallenge($request);
    }

    public function honeypotFilled(Request $request): bool
    {
        $value = trim((string) $request->input('company_website', ''));

        return $value !== '';
    }

    public function formAgeLooksHuman(Request $request): bool
    {
        $startedAt = (int) $request->input('form_started_at', 0);

        if ($startedAt <= 0) {
            return false;
        }

        $age = time() - $startedAt;

        return $age >= 3 && $age <= 60 * 60 * 6;
    }

    public function assertMathChallenge(Request $request): void
    {
        $token = (string) $request->input('human_check_token', '');
        $answer = trim((string) $request->input('human_check_answer', ''));

        if ($token === '' || $answer === '') {
            throw ValidationException::withMessages([
                'human_check_answer' => 'Please answer the anti-spam question.',
            ]);
        }

        if (! preg_match('/^-?\d+$/', $answer)) {
            throw ValidationException::withMessages([
                'human_check_answer' => 'Please enter a number for the anti-spam question.',
            ]);
        }

        try {
            $payload = Crypt::decrypt($token);
        } catch (DecryptException) {
            throw ValidationException::withMessages([
                'human_check_answer' => 'Anti-spam check expired. Please refresh and try again.',
            ]);
        }

        if (! is_array($payload) || ! isset($payload['answer'], $payload['exp'])) {
            throw ValidationException::withMessages([
                'human_check_answer' => 'Anti-spam check expired. Please refresh and try again.',
            ]);
        }

        if (now()->getTimestamp() > (int) $payload['exp']) {
            throw ValidationException::withMessages([
                'human_check_answer' => 'Anti-spam check expired. Please refresh and try again.',
            ]);
        }

        if ((int) $answer !== (int) $payload['answer']) {
            throw ValidationException::withMessages([
                'human_check_answer' => 'Incorrect answer. Please try again.',
            ]);
        }
    }
}
