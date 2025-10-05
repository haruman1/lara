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



    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email'    => __('These credentials do not match our records.'),
            'password' => __('These credentials do not match our records.'),
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember    = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->hasAnyRole(['super-admin', 'admin', 'super_dede', 'blogger', 'billing_admin'])) {
                return redirect()->intended(Filament::getHomeUrl() ?? '/admin');
            }

            if ($user->hasAnyRole(['users', 'guests'])) {
                return redirect()->intended('/users');
            }

            Auth::logout();
            return redirect('/sign-in')->withErrors([
                'email' => 'Unauthorized access.',
            ]);
        }

        return $this->sendFailedLoginResponse($request);
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email'    => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     $remember    = $request->boolean('remember');

    //     if (Auth::attempt($credentials, $remember)) {
    //         $request->session()->regenerate();
    //         $user = Auth::user();

    //         // Role-based redirect
    //         if ($user->hasRole('admin')) {
    //             return redirect()->intended(Filament::getHomeUrl());
    //         }

    //         if ($user->hasAnyRole(['users', 'guests'])) {
    //             return redirect()->intended('/users');
    //         }

    //         // Jika role tidak dikenal
    //         Auth::logout();
    //         return redirect('/sign-in')->withErrors([
    //             'email' => 'Unauthorized access.',
    //         ]);
    //     }

    //     return $this->sendFailedLoginResponse($request);
    // }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect('/sign-in');
    }
}
