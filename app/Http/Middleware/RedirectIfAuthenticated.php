<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Jika pengguna sudah terautentikasi, arahkan ke halaman dashboard sesuai peran (role)
            $user = Auth::user();
            if (strtolower($user->role) === 'superadmin' || strtolower($user->role) === 'admin 1' || strtolower($user->role) === 'admin 2') {
                return redirect()->route('apps.dashboard');
            } elseif (strtolower($user->role) === 'admin content') {
                return redirect()->route('cms.dashboard');
            }
        } else {
            // Jika pengguna tidak terautentikasi, pastikan sesi bersih
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $next($request);
    }
}
