<?php

namespace App\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleBasedAccess
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect(route('login'))->with('error', 'Unauthorized access. Please log in (error disini).');
        }

        $user = Auth::user();

        // Kalau role sesuai dengan yang dibutuhkan
        if ($user->hasRole($role)) {
            return $next($request);
        }

        // Kalau role tidak sesuai, cek fallback role user
        if ($user->hasAnyRole(['admin', 'IamHuman', 'blogger', 'billing_admin'])) {
            return redirect(Filament::getHomeUrl());
        }

        if ($user->hasAnyRole(['users'])) {
            return redirect('/users');
        }

        // Jika tidak ada role valid, logout
        Auth::logout();
        return redirect(route('login'))->with('error', 'Unauthorized access. (error 2 disini)');
    }
}
