<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if the user has any of the specified roles
            if (in_array(strtolower($user->role), $roles)) {
                return $next($request);
            }
        }

        // Redirect unauthorized users or return an error response
        return redirect()->route('login')->with('error', 'Unauthorized access.');
    }
}
