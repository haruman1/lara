<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Filament\PostPreviewController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicPostController;
use App\Http\Middleware\RoleBasedAccess;
use App\Livewire\Components\TestDemo as ComponentsTestDemo;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\TestDemo;
use App\Models\Post;

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
Route::get('/sign-in', [AuthLoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/sign-in', [AuthLoginController::class, 'login'])
    ->middleware('guest')->name('login.post');

Route::post('/sign-out', [AuthLoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
Route::get('/sign-out', [AuthLoginController::class, 'logout'])
    ->middleware('auth');
Route::get('/p/{token}', [PublicPostController::class, 'show'])->name('post.show');

// Admin routes (Filament will handle /kumon automatically)
// Route::middleware(['auth', RoleBasedAccess::class . ':admin'])
//     ->prefix('kumon')
//     ->group(function () {
//         // Additional admin routes if needed
// routes/web.php
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/{slug}', [PostController::class, 'show'])->name('post.show');
});
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
Route::get('/preview/{post}', function (Post $post) {
    return view('blog.preview', compact('post'));
})->name('posts.preview');
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

//     });

// User/Guest routes (Livewire dashboard)
// Route::middleware(['auth', RoleBasedAccess::class . ':users,guests'])
//     ->prefix('users')
//     ->group(function () {
//         Route::get('/', App\Livewire\UserDashboard::class)->name('user.dashboard');
//         Route::get('/profile', App\Livewire\UserProfile::class)->name('user.profile');
//     });
// Fallback route for undefined paths
