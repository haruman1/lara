<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use App\Models\Navbar;
use Illuminate\Support\Facades\Gate; // <-- Import Gate
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('partials.navbar', function ($view) {
            $menus = Navbar::with('children')
                ->whereNull('parent_id')
                ->orderBy('order')
                ->get();

            $view->with('menus', $menus);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            // Jika user memiliki role 'super-admin', berikan akses penuh
            return $user->hasRole('super-admin') ? true : null;
        });
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('twitter', \SocialiteProviders\Twitter\Provider::class);
            $event->extendSocialite('github', \SocialiteProviders\GitHub\Provider::class);
            $event->extendSocialite('google', \SocialiteProviders\Google\Provider::class);
        });
    }
}
