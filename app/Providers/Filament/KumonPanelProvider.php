<?php

namespace App\Providers\Filament;


use Awcodes\StickyHeader\StickyHeaderPlugin;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
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
use App\Filament\Widgets\UserActivityChart;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Pboivin\FilamentPeek\FilamentPeekPlugin;
use Illuminate\Support\Facades\Auth;
use pxlrbt\FilamentSpotlight\SpotlightPlugin;
use Leandrocfe\FilamentApexCharts\FilamentApexChartsPlugin;
use App\Http\Middleware\LogUserActivity;
use ShuvroRoy\FilamentSpatieLaravelHealth\FilamentSpatieLaravelHealthPlugin;



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
            ->brandLogo('/images/icon/zd3rcd6ftavhpy4xgki9.webp')
            ->darkModeBrandLogo('/images/icon/wcern2cczvex3oqhqzpf.webp')
            ->brandLogoHeight('2rem')
            ->favicon('/images/icon/favicon.ico')
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
                UserActivityChart::class,
                // FilamentInfoWidget::class,
            ])->plugins([
                FilamentShieldPlugin::make(),
                FilamentSpatieLaravelHealthPlugin::make()
                    ->authorize(fn(): bool => Auth::user()->can('manage_website')),
                SpotlightPlugin::make(),
                FilamentPeekPlugin::make()
                    ->disablePluginStyles(),
                FilamentApexChartsPlugin::make(),
                StickyHeaderPlugin::make()
                    ->stickOnListPages(false),


            ])
            ->middleware([
                LogUserActivity::class,
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
                'role:admin|super_admin|blogger|billing_admin',

            ])->authGuard('web')
            ->sidebarWidth('16rem')
            ->sidebarFullyCollapsibleOnDesktop()
            ->collapsedSidebarWidth('9rem');
    }
}
