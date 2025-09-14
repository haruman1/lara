<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\RoleBasedAccess;
use Illuminate\Support\Facades\Route;

// Livewire Components
use App\Livewire\HomePage;
use App\Livewire\Components\TestDemo;
use App\Livewire\UserDashboard;
use App\Livewire\UserProfile;
use App\Livewire\Components\AboutUs;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::get('/', HomePage::class)->name('home');
Route::get('/about', AboutUs::class)->name('about.page');
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
Route::get('test-demo', TestDemo::class)->name('test.demo');

/*
|--------------------------------------------------------------------------
| Change Language/Locale
|--------------------------------------------------------------------------
*/
Route::get('translations/{locale}', [LocalizationController::class, 'changeLocale'])
    ->name('lang.switch');
/*
|--------------------------------------------------------------------------
| Login with Social Media
|--------------------------------------------------------------------------
*/
Route::prefix('auth')->group(function () {
    Route::get('/{provider}/redirect', [SocialAuthController::class, 'redirect'])->whereIn('provider', ['google', 'github', 'twitter-oauth-2'])->name('social.redirect');
    Route::get('/{provider}/callback', [SocialAuthController::class, 'callback'])->whereIn('provider', ['google', 'github', 'twitter-oauth-2'])->name('social.callback');
});
/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [AuthLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/sign-in', [AuthLoginController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/sign-out', [AuthLoginController::class, 'logout'])->name('logout');
    Route::get('/sign-out', [AuthLoginController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| Blog
|--------------------------------------------------------------------------
*/
Route::prefix('blog')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/{slug}', [PostController::class, 'show'])->name('post.show');
});

/*
|--------------------------------------------------------------------------
| User / Guest Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['roleAccess:users'])->prefix('users')->group(function () {
    Route::get('/', UserDashboard::class)->name('user.dashboard');
    Route::get('/profile', UserProfile::class)->name('user.profile');
});

/*
|--------------------------------------------------------------------------
| Fallback
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return redirect()->route('home');
});

/*
|--------------------------------------------------------------------------
| Dynamic Page Slug (keep last)
|--------------------------------------------------------------------------
*/
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
