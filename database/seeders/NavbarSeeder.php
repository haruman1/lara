<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    public function run(): void
    {
        Navbar::truncate();

        // Menu Mega
        $product = Navbar::create([
            'title' => 'Product',
            'slug' => '#',
            'order' => 1,
            'is_active' => true,
            'icon' => 'heroicon-o-cube',
            'type' => 'mega',
        ]);

        // Kolom 1 - Explore
        Navbar::create([
            'title' => 'Zabbix Overview & Demo',
            'slug' => '/product/overview',
            'parent_id' => $product->id,
            'order' => 1,
            'is_active' => true,
            'icon' => 'heroicon-o-play-circle',
            'group' => 'Explore Zabbix',
        ]);

        Navbar::create([
            'title' => 'Zabbix Cloud',
            'slug' => '/product/cloud',
            'parent_id' => $product->id,
            'order' => 2,
            'is_active' => true,
            'icon' => 'heroicon-o-cloud',
            'group' => 'Explore Zabbix',
        ]);

        Navbar::create([
            'title' => 'Features',
            'slug' => '/product/features',
            'parent_id' => $product->id,
            'order' => 3,
            'is_active' => true,
            'icon' => 'heroicon-o-chart-bar',
            'group' => 'Explore Zabbix',
        ]);

        Navbar::create([
            'title' => 'Integrations',
            'slug' => '/product/integrations',
            'parent_id' => $product->id,
            'order' => 4,
            'is_active' => true,
            'icon' => 'heroicon-o-cube-transparent',
            'group' => 'Explore Zabbix',
        ]);

        // Kolom 2 - Monitor anything
        Navbar::create([
            'title' => 'Network',
            'slug' => '/monitor/network',
            'parent_id' => $product->id,
            'order' => 1,
            'is_active' => true,
            'group' => 'Monitor Anything',
        ]);

        Navbar::create([
            'title' => 'Server',
            'slug' => '/monitor/server',
            'parent_id' => $product->id,
            'order' => 2,
            'is_active' => true,
            'group' => 'Monitor Anything',
        ]);

        Navbar::create([
            'title' => 'Cloud',
            'slug' => '/monitor/cloud',
            'parent_id' => $product->id,
            'order' => 3,
            'is_active' => true,
            'group' => 'Monitor Anything',
        ]);

        // Kolom 3 - About product
        Navbar::create([
            'title' => 'What’s new in Zabbix',
            'slug' => '/product/whats-new',
            'parent_id' => $product->id,
            'order' => 1,
            'is_active' => true,
            'group' => 'About Product',
        ]);

        Navbar::create([
            'title' => 'Release Notes',
            'slug' => '/product/release-notes',
            'parent_id' => $product->id,
            'order' => 2,
            'is_active' => true,
            'group' => 'About Product',
        ]);
    }
}
