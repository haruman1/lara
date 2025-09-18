<?php



namespace App\Filament\Resources\Navbars\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use BladeUI\Icons\Factory as IconFactory;

class NavbarForm
{
    protected static function humanizeIconName(string $icon): string
    {
        $label = str_replace(['heroicon-o-', 'heroicon-s-', 'heroicon-m-'], '', $icon);
        $label = str_replace('-', ' ', $label);
        $label = ucwords($label);

        $style = '';
        if (str_starts_with($icon, 'heroicon-o-')) {
            $style = ' (Outline)';
        } elseif (str_starts_with($icon, 'heroicon-s-')) {
            $style = ' (Solid)';
        } elseif (str_starts_with($icon, 'heroicon-m-')) {
            $style = ' (Mini)';
        }

        // hasil: <icon kecil> Label (Style)
        return "<x-{$icon} class='w-5 h-5 inline text-gray-600 mr-1' /> {$label}{$style}";
    }



    protected static function getHeroicons(): array
    {
        $factory = app(\BladeUI\Icons\Factory::class);
        $icons = [];

        foreach ($factory->all() as $set => $options) {
            $prefix = $options['prefix'] ?? '';

            foreach ($options['paths'] as $path) {
                foreach (glob($path . '/*.svg') as $file) {
                    $name = pathinfo($file, PATHINFO_FILENAME);
                    $fullName = $prefix ? "{$prefix}-{$name}" : $name;

                    $icons[$fullName] = self::humanizeIconName($fullName);
                }
            }
        }

        asort($icons);

        return $icons; // key = heroicon-o-home, value = "Home"
    }


    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->label('Nama Menu')
                ->required()
                ->maxLength(15),

            TextInput::make('slug')
                ->label('URL atau #')
                ->required()
                ->maxLength(25)
                ->helperText('Gunakan "#" jika menu memiliki dropdown'),

            TextInput::make('parent_id')
                ->label('Parent ID')
                ->nullable()
                ->helperText('Kosongkan jika menu utama'),

            TextInput::make('order')
                ->label('Urutan Menu')
                ->required()
                ->default(0)
                ->helperText('Semakin kecil semakin duluan tampil'),

            Select::make('icon')
                ->label('Icon Menu (opsional)')
                ->options(
                    collect(static::getHeroicons())
                        ->mapWithKeys(fn($label, $icon) => [
                            $icon => "<x-{$icon} class='w-5 h-5' /> {$label}",
                        ])
                        ->toArray()
                )
                ->searchable()
                ->allowHtml() // supaya icon tampil, bukan sebagai string HTML
                ->nullable()
                ->helperText('Pilih icon dari Heroicons')
        ]);
    }
}
