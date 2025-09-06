<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Role-based redirect
            if ($user->hasRole('admin')) {
                return redirect()->intended(Filament::getUrl());
            } elseif ($user->hasRole(['users', 'guests'])) {
                return redirect()->intended('/users');
            }

            // Fallback redirect
            return redirect()->intended('/users');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
            'password' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        if (! Auth::check()) {
            return redirect('/login');
        }
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
