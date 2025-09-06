<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\RoleBasedAccess;
use App\Livewire\Components\TestDemo as ComponentsTestDemo;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\TestDemo;

Route::get('/', HomePage::class)->name('home');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}/redirect', [SocialAuthController::class, 'redirect'])
        ->whereIn('provider', ['google', 'github', 'twitter-oauth-2'])
        // Gunakan 'twitter-oauth-2' untuk X (Twitter baru)
        // Gunakan 'twitter' untuk Twitter lama
        ->name('social.redirect');

    Route::get('/{provider}/callback', [SocialAuthController::class, 'callback'])
        ->whereIn('provider', ['google', 'github', 'twitter-oauth-2'])
        // Gunakan 'twitter-oauth-2' untuk X (Twitter baru)
        // Gunakan 'twitter' untuk Twitter lama
        ->name('social.callback');
});


Route::get('translations/{locale}', [LocalizationController::class, 'changeLocale'])->name('lang.switch');

Route::get('test-demo', ComponentsTestDemo::class)->name('test.demo');
// Authentication routes
Route::get('/login', [AuthLoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthLoginController::class, 'login'])
    ->middleware('guest');

Route::post('/logout', [AuthLoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
Route::get('/logout', [AuthLoginController::class, 'logout'])
    ->middleware('auth');

// Admin routes (Filament will handle /kumon automatically)
Route::middleware(['auth', RoleBasedAccess::class . ':admin'])
    ->prefix('kumon')
    ->group(function () {
        // Additional admin routes if needed


    });

// User/Guest routes (Livewire dashboard)
Route::middleware(['auth', RoleBasedAccess::class . ':users,guests'])
    ->prefix('users')
    ->group(function () {
        Route::get('/', App\Livewire\UserDashboard::class)->name('user.dashboard');
        Route::get('/profile', App\Livewire\UserProfile::class)->name('user.profile');
    });
