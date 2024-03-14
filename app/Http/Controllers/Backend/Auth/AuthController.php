<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Authentication | PT Viatama Sentrakarya'
        ];

        return view('backend.auth.login', $data);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            // Authenticated, redirect user based on role
            $user = Auth::user();
            if (strtolower($user->role) === 'superadmin' || strtolower($user->role) === 'admin 1' || strtolower($user->role) === 'admin 2') {
                return redirect()->route('apps.dashboard');
            } elseif (strtolower($user->role) === 'admin content') {
                return redirect()->route('cms.dashboard');
            }
        }

        // Authentication failed, redirect back with error message
        return redirect()->route('login')->with('error', 'Invalid email or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Menghapus sesi pengguna
        $request->session()->regenerateToken(); // Menghasilkan token sesi baru

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
