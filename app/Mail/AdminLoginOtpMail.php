<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminLoginOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $otp,
        public string $userName,
        public int $expiryMinutes
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'EmCa Admin Login Verification Code',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin-login-otp',
        );
    }
}
