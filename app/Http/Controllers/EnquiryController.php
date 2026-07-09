<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'source' => ['nullable', 'string', 'max:100'],
        ]);

        Enquiry::create([
            ...$data,
            'source' => $data['source'] ?? 'contact',
            'status' => Enquiry::STATUS_NEW,
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
    }
}
