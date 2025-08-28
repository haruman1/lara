<?php

namespace App\Filament\Pages\Auth;

use Filament\Actions\Action;
use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\View;
use Filament\Schemas\Schema;

class Login extends BaseLogin
{
    public function form(Schema $schema): Schema
    {
        return parent::form($schema)
            ->schema([
                ...parent::form($schema)->getComponents(),
                Section::make()
                    ->label('Social Login Options')
                    ->columns([
                        '@md' => 3,
                        '@xl' => 4,
                        '@lg' => 10,
                    ])
                    ->schema([
                        View::make('filament.pages.auth.login'),
                    ])
                    ->extraAttributes(['class' => 'mx-auto']), // Add this line
                // Group::make()
                //     ->gridContainer()
                //     ->columns([
                //         '@md' => 3,
                //         '@xl' => 4,
                //     ])
                //     // ->label('Social Login Options')
                //     ->schema([ds
                //         View::make('components.social-login-buttons'),
                //     ]),
                // ToggleButtons::make('feedback')
                //     ->label('Like this post?')
                //     ->boolean()
                //     ->inline(),
                // View::make('components.social-login-buttons'),
                // Action::make('github')
                //     ->label('Login with GitHub')
                //     ->url(route('github.login'))
                //     ->color('gray')
                //     // ->extraAttributes([
                //     //     'class' => 'flex items-center space-x-2',
                //     // ])
                //     ->icon(function () {
                //         return view('components.github-icon');
                //     }),
                // Action::make('google')
                //     ->label('Login with Google')
                //     ->url(route('google.login'))
                //     ->color('gray')
                //     ->icon(function () {
                //         return view('components.google-icon');
                //     }),
                // Action::make('x')
                //     ->label('Login with X')
                //     ->url(route('x.login'))
                //     ->color('gray')
                //     ->icon(function () {
                //         return view('components.github-icon');
                //     }),

            ]);
    }
    protected function getSubNavigation(): array
    {
        return [];
    }
}
