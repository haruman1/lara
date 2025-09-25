<?php

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RoleBasedAccess;
use \App\Http\Middleware\SeoMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use \App\Http\Middleware\PreventRouteCollision;
use App\Http\Middleware\LogUserActivity;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'role' => RedirectIfAuthenticated::class,
            'roleAccess' => RoleBasedAccess::class,
            'seo' => SeoMiddleware::class,
            'prevent.collision' => PreventRouteCollision::class,
            'user.activity' => LogUserActivity::class


        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
