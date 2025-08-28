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
            return redirect(Filament::getHomeUrl());
        }

        $user = Auth::user();

        // Check if user has the required role
        if (!$user->hasRole($role)) {
            // Redirect based on user's actual role
            if ($user->hasRole('admin')) {
                return redirect(Filament::getHomeUrl());
            } elseif ($user->hasRole(['users', 'guests'])) {
                return redirect('/users');
            }

            // If no valid role, logout and redirect to login
            Auth::logout();
            return redirect(Filament::getUrl())->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}
