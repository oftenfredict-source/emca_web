<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EmCa Admin OTP</title>
</head>
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.6;">
    <p>Hello {{ $userName }},</p>
    <p>Your EmCa Admin login verification code is:</p>
    <p style="font-size: 28px; font-weight: bold; letter-spacing: 4px; color: #940000;">{{ $otp }}</p>
    <p>This code expires in {{ $expiryMinutes }} minutes.</p>
    <p>If you did not try to sign in, you can ignore this email.</p>
    <p>EmCa Techonologies</p>
</body>
</html>
