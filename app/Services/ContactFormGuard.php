<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactFormGuard
{
    public function assertNotSpam(Request $request): void
    {
        if ($this->honeypotFilled($request)) {
            throw ValidationException::withMessages([
                'not_robot' => 'Unable to send your message. Please try again.',
            ]);
        }

        if (! $this->formAgeLooksHuman($request)) {
            throw ValidationException::withMessages([
                'not_robot' => 'Please take a moment to complete the form, then try again.',
            ]);
        }

        // Must be present and exactly "1" — unchecked boxes are omitted from POST.
        if ($request->input('not_robot') !== '1') {
            throw ValidationException::withMessages([
                'not_robot' => 'Please confirm you are not a robot.',
            ]);
        }
    }

    public function honeypotFilled(Request $request): bool
    {
        return trim((string) $request->input('company_website', '')) !== '';
    }

    public function formAgeLooksHuman(Request $request): bool
    {
        $startedAt = (int) $request->input('form_started_at', 0);

        if ($startedAt <= 0) {
            return false;
        }

        $age = time() - $startedAt;

        return $age >= 2 && $age <= 60 * 60 * 6;
    }
}
