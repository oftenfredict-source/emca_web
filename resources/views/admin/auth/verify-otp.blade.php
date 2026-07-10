<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP - EmCa Admin</title>
    @include('partials.favicon')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('admin.partials.theme')
    <style>
        body {
            background: linear-gradient(135deg, #6e0000 0%, #940000 50%, #b33333 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 20px 60px rgba(110, 0, 0, 0.35);
        }

        .login-card h3 {
            color: #940000;
            font-family: "Century Gothic", CenturyGothic, AppleGothic, "Trebuchet MS", sans-serif;
        }

        .login-card p,
        .login-card label {
            font-family: "Century Gothic", CenturyGothic, AppleGothic, "Trebuchet MS", sans-serif;
        }

        .otp-input {
            letter-spacing: 0.45em;
            text-align: center;
            font-size: 1.35rem;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="card login-card">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Verify Login</h3>
                <p class="text-muted mb-1">Enter the 6-digit code sent to:</p>
                @if($smsSent)
                    <p class="small text-muted mb-0">{{ $maskedPhone }}</p>
                @endif
                @if($emailSent)
                    <p class="small text-muted mb-0">{{ $maskedEmail }}</p>
                @endif
                @if(! $smsSent && ! $emailSent)
                    <p class="small text-muted mb-0">your registered contact</p>
                @endif
            </div>

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.verify.submit') }}" class="mb-3">
                @csrf
                <div class="mb-4">
                    <label for="otp" class="form-label">Verification Code</label>
                    <input
                        type="text"
                        class="form-control otp-input"
                        id="otp"
                        name="otp"
                        value="{{ old('otp') }}"
                        inputmode="numeric"
                        pattern="[0-9]{6}"
                        maxlength="6"
                        required
                        autofocus
                    >
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Verify &amp; Sign In</button>
            </form>

            <form method="POST" action="{{ route('admin.login.verify.resend') }}" class="mb-3">
                @csrf
                <button type="submit" class="btn btn-outline-secondary w-100">Resend Code</button>
            </form>

            <div class="text-center">
                <a href="{{ route('admin.login') }}" class="small text-decoration-none">Back to login</a>
            </div>
        </div>
    </div>
</body>
</html>
