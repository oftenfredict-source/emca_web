<?php

namespace App\Http\Middleware;

use App\Services\AdminOtpService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnforceAdminSessionSecurity
{
    public function __construct(
        private readonly AdminOtpService $adminOtp
    ) {}

    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user()) {
            return $next($request);
        }

        if (Auth::viaRemember()) {
            return $this->expireSession(
                $request,
                'Please sign in again with your password and verification code.'
            );
        }

        $timeoutMinutes = max(1, (int) config('admin_auth.idle_timeout_minutes', 5));
        $lastActive = (int) $request->session()->get('admin_last_active_at', 0);

        if ($lastActive === 0 || (now()->timestamp - $lastActive) > ($timeoutMinutes * 60)) {
            return $this->expireSession(
                $request,
                'Your session expired after '.$timeoutMinutes.' minutes of inactivity. Please sign in again.'
            );
        }

        $request->session()->put('admin_last_active_at', now()->timestamp);

        return $next($request);
    }

    private function expireSession(Request $request, string $message): Response
    {
        $recaller = Auth::getRecallerName();

        Auth::logout();
        $this->adminOtp->clear();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        cookie()->queue(cookie()->forget($recaller));

        if ($request->expectsJson()) {
            return response()->json(['message' => $message], 401);
        }

        return redirect()
            ->route('admin.login')
            ->withErrors(['email' => $message]);
    }
}
