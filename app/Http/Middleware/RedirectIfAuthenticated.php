<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();

                // Role-based redirect for authenticated users
                if ($user->hasRole('admin')) {
                    return redirect('/kumon');
                } elseif ($user->hasRole(['users', 'guests'])) {
                    return redirect('/users');
                }
            }
            // If no valid role, logout and redirect to login
            Auth::logout();
            return redirect(route('login'))->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}
