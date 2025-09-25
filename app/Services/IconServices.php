<?php

namespace App\Services;

use BladeUI\Icons\Factory;

class IconService
{
    private Factory $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function allIcons(): array
    {
        $icons = [];
        foreach ($this->factory->all() as $set => $options) {
            $prefix = $options['prefix'] ?? '';
            foreach ($this->scanIcons($options['paths']) as $icon) {
                $icons[] = $prefix ? "{$prefix}-{$icon}" : $icon;
            }
        }
        sort($icons);
        return $icons;
    }

    private function scanIcons(array $paths): array
    {
        $files = [];
        foreach ($paths as $path) {
            foreach (glob($path . '/*.svg') as $file) {
                $files[] = pathinfo($file, PATHINFO_FILENAME);
            }
        }
        return $files;
    }
}
