<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\Login;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RoleBasedAccess;
use Awcodes\StickyHeader\StickyHeaderPlugin;
use Filament\Actions\Action;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Pboivin\FilamentPeek\FilamentPeekPlugin;
use Illuminate\Support\Facades\Auth;
use pxlrbt\FilamentSpotlight\SpotlightPlugin;

class KumonPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('kumon')
            ->path('kumon')
            ->userMenuItems([
                'logout' => fn() => Action::make('logout')
                    ->label('Log out')
                    ->icon('heroicon-o-arrow-left-on-rectangle')
                    ->color('danger')
                    ->requiresConfirmation() // wajib biar modal muncul
                    ->modalHeading('Log out')
                    ->modalDescription('Are you sure you want to log out?')
                    ->modalSubmitActionLabel('Yes, log out')
                    ->action(function () {
                        Auth::guard('web')->logout();

                        session()->invalidate();
                        session()->regenerateToken();

                        return redirect()->route('login');
                    }),
            ])

            ->colors([
                'primary' => Color::Teal,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                // FilamentInfoWidget::class,
            ])->plugins([
                SpotlightPlugin::make(),
                FilamentPeekPlugin::make()
                    ->disablePluginStyles(),

                StickyHeaderPlugin::make()
                    ->stickOnListPages(false),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->authMiddleware([
                // Authenticate::class,
                RoleBasedAccess::class . ':admin',
            ])->authGuard('web');
    }
}
