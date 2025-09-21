<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama
        Navbar::truncate();

        // =============================
        // 1. Normal link
        // =============================
        Navbar::create([
            'title' => 'Home',
            'slug' => 'home',
            'manual_slug' => '/',
            'group' => 'header',
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-home',
        ]);

        Navbar::create([
            'title' => 'About',
            'slug' => 'about',
            'manual_slug' => '/about',
            'group' => 'header',
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-information-circle',
        ]);

        // =============================
        // 2. Dropdown
        // =============================
        $services = Navbar::create([
            'title' => 'Services',
            'slug' => 'services',
            'group' => 'header',
            'order' => 3,
            'type' => 'dropdown',
            'icon' => 'heroicon-o-cog-6-tooth',
        ]);

        Navbar::create([
            'title' => 'Web Development',
            'slug' => 'services/web-development',
            'manual_slug' => '/services/web-development',
            'group' => 'header',
            'parent_id' => $services->id,
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-code-bracket',
        ]);

        Navbar::create([
            'title' => 'Mobile Apps',
            'slug' => 'services/mobile-apps',
            'manual_slug' => '/services/mobile-apps',
            'group' => 'header',
            'parent_id' => $services->id,
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-device-phone-mobile',
        ]);

        Navbar::create([
            'title' => 'SEO Optimization',
            'slug' => 'services/seo',
            'manual_slug' => '/services/seo',
            'group' => 'header',
            'parent_id' => $services->id,
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-magnifying-glass',
        ]);

        // =============================
        // 3. Mega menu
        // =============================
        $about = Navbar::create([
            'title' => 'About',
            'slug' => 'about',
            'group' => 'header',
            'order' => 4,
            'type' => 'mega',
            'icon' => 'heroicon-o-archive-box',
        ]);

        Navbar::create([
            'title' => 'Laptops',
            'slug' => 'products/laptops',
            'manual_slug' => '/products/laptops',
            'group' => 'header',
            'parent_id' => $about->id,
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-computer-desktop',
        ]);

        Navbar::create([
            'title' => 'Smartphones',
            'slug' => 'products/smartphones',
            'manual_slug' => '/products/smartphones',
            'group' => 'header',
            'parent_id' => $about->id,
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-device-phone-mobile',
        ]);

        Navbar::create([
            'title' => 'Accessories',
            'slug' => 'products/accessories',
            'manual_slug' => '/products/accessories',
            'group' => 'header',
            'parent_id' => $about->id,
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-paper-clip',
        ]);
        // =============================
        // 4. Mega menu with different parent (Products)
        // =============================
        $products = Navbar::create([
            'title' => 'Products',
            'slug' => 'products',
            'group' => 'header',
            'order' => 4,
            'type' => 'mega',
            'icon' => 'heroicon-o-archive-box',
        ]);

        Navbar::create([
            'title' => 'Laptops',
            'slug' => 'products/laptops',
            'manual_slug' => '/products/laptops',
            'group' => 'header',
            'parent_id' => $products->id,
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-computer-desktop',
        ]);

        Navbar::create([
            'title' => 'Smartphones',
            'slug' => 'products/smartphones',
            'manual_slug' => '/products/smartphones',
            'group' => 'header',
            'parent_id' => $products->id,
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-device-phone-mobile',
        ]);

        Navbar::create([
            'title' => 'Accessories',
            'slug' => 'products/accessories',
            'manual_slug' => '/products/accessories',
            'group' => 'header',
            'parent_id' => $products->id,
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-paper-clip',
        ]);
    }
}
