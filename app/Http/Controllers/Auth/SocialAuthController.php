<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    private $allowedProviders = ['google', 'github', 'twitter-oauth-2',]; // 'twitter-oauth-2' untuk X (Twitter baru), 'twitter' untuk Twitter lama

    public function redirect($provider)
    {
        if (! in_array($provider, $this->allowedProviders)) {
            abort(404); // atau redirect('/login')
        }
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        if (! in_array($provider, $this->allowedProviders)) {
            abort(404);
        }

        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = User::updateOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name'              => $socialUser->getName() ?? $socialUser->getNickname(),
                    'email'             => $socialUser->getEmail(),
                    'email_verified_at' => now(),
                    'password'          => bcrypt(uniqid()), // random password
                    'provider'          => $provider,
                    'provider_id'       => $socialUser->getId(),
                    'avatar'            => $socialUser->getAvatar(),
                ]
            );

            // 🔹 Assign role "user" jika belum ada role
            if (! $user->hasAnyRole(['admin', 'users', 'guests'])) {
                $user->assignRole('users');
            }

            Auth::login($user);

            if ($user->hasRole('admin')) {
                return redirect(Filament::getHomeUrl());
            } else {
                return redirect('/users');
            }
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['msg' => $e->getMessage()]);
        }
    }
}
