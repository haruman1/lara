<?php

// app/Http/Middleware/PreventRouteCollision.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class PreventRouteCollision
{
    public function handle($request, Closure $next)
    {
        $path = ltrim($request->path(), '/');

        // cek apakah path ada di daftar route
        foreach (Route::getRoutes() as $route) {
            if ($route->uri() === $path) {
                return $next($request); // biarin lanjut
            }
        }

        return $next($request);
    }
}
