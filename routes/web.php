<?php
// Controllers
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\RegisterController as AuthRegisterController;

use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

// Livewire Components
use App\Livewire\HomePage;
use App\Livewire\Components\TestDemo;
use App\Livewire\UserDashboard;
use App\Livewire\UserProfile;
use App\Livewire\Components\Services;
use App\Livewire\Components\AboutUs;

use App\Livewire\Components\ContactUs;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::middleware('seo')->group(function () {
    Route::get('/', HomePage::class)->name('home')->defaults('slug', 'home');
    Route::get('/about', AboutUs::class)->name('page.about')->defaults('slug', 'about');
    Route::get('/services', Services::class)->name('page.services')->defaults('slug', 'services');
    Route::get('/contact', ContactUs::class)->name('page.contact')->defaults('slug', 'contact');
    Route::get('test-demo', TestDemo::class)->name('test.demo');
    Route::middleware('guest')->group(function () {
        Route::get('/sign-in', [AuthLoginController::class, 'showLoginForm'])->name('login');
        Route::get('/sign-up', [AuthRegisterController::class, 'showRegisterForm'])->name('signup');
        Route::post('/sign-in', [AuthLoginController::class, 'login'])->name('login.post');
        Route::post('/sign-up', [AuthRegisterController::class, 'register'])->name('signup.post');
    });
});


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


Route::middleware('auth')->group(function () {
    Route::post('/sign-out', [AuthLoginController::class, 'logout'])->name('logout');
    Route::get('/sign-out', [AuthLoginController::class, 'logout'])->name('logout.get');
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
Route::prefix('users')->group(function () {
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

Route::get('/{slug}', [PageController::class, 'show'])
    ->middleware('prevent.collision', 'seo')
    ->name('page.show');
