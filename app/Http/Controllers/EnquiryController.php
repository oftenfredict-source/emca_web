<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Services\ContactFormGuard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request, ContactFormGuard $guard): RedirectResponse
    {
        // Bots that fill the hidden honeypot get a fake success and nothing is saved.
        if ($guard->honeypotFilled($request)) {
            return back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            'source' => ['nullable', 'string', 'max:100'],
            'company_website' => ['nullable', 'string', 'max:255'],
            'form_started_at' => ['required', 'integer'],
            'not_robot' => ['accepted'],
        ], [
            'not_robot.accepted' => 'Please confirm you are not a robot.',
        ]);

        $guard->assertNotSpam($request);

        Enquiry::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'subject' => $data['subject'] ?? null,
            'message' => $data['message'],
            'source' => $data['source'] ?? 'contact',
            'status' => Enquiry::STATUS_NEW,
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
    }
}
