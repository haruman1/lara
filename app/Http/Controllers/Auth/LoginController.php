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
    public function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => __('These credentials do not match our records.'),
            'password' => __('These credentials do not match our records.'),
            'remember' => __('These credentials do not match our records.'),
        ]);
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
                var_dump($user->getRoleNames());
            } elseif ($user->hasRole(['users', 'guests'])) {
                return redirect()->intended('/users');
            }

            // Fallback redirect
            throw ValidationException::withMessages([
                'email' => __('Kamu bukan admin'),
                'password' => __('Kamu bukan admin'),
            ]);
        } else {
            return $this->sendFailedLoginResponse($request);
        }

        throw ValidationException::withMessages([
            'email' => __('Email Incorrect.'),
            'password' => __('Password Incorrect.'),
        ]);
    }

    public function logout(Request $request)
    {
        if (! Auth::check()) {
            return redirect('/sign-out');
        }
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign-out');
    }
}
