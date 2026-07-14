<?php

return [
    'otp_phone' => env('ADMIN_OTP_PHONE', '255744341239'),
    'otp_email' => env('ADMIN_OTP_EMAIL', 'oftenfred.ict@gmail.com'),
    'otp_expiry_minutes' => (int) env('ADMIN_OTP_EXPIRY_MINUTES', 10),
    'otp_max_attempts' => (int) env('ADMIN_OTP_MAX_ATTEMPTS', 5),

    'sms' => [
        // Host root or full legacy link URL. API posting always uses /api/sms/v1/text/single.
        'base_url' => env('SMS_API_BASE_URL', 'https://messaging-service.co.tz'),
        'username' => env('SMS_API_USERNAME'),
        'password' => env('SMS_API_PASSWORD'),
        'from' => env('SMS_API_FROM', 'EmCaTech'),
    ],
];
