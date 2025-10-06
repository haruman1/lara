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
        // 1. Normal links
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

        Navbar::create([
            'title' => 'Contact',
            'slug' => 'contact',
            'manual_slug' => '/contact',
            'group' => 'header',
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-envelope',
        ]);

        // =============================
        // 2. Dropdown
        // =============================
        $services = Navbar::create([
            'title' => 'Services',
            'slug' => 'services',
            'group' => 'header',
            'order' => 4,
            'type' => 'dropdown',
            'icon' => 'heroicon-o-cog-6-tooth',
        ]);

        Navbar::create([
            'title' => 'Web Development',
            'slug' => 'services/web-development',
            'manual_slug' => '/services/web-development',
            'group' => 'dropdown',
            'parent_id' => $services->id,
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-code-bracket',
        ]);

        Navbar::create([
            'title' => 'Mobile Apps',
            'slug' => 'services/mobile-apps',
            'manual_slug' => '/services/mobile-apps',
            'group' => 'dropdown',
            'parent_id' => $services->id,
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-device-phone-mobile',
        ]);

        Navbar::create([
            'title' => 'SEO Optimization',
            'slug' => 'services/seo',
            'manual_slug' => '/services/seo',
            'group' => 'dropdown',
            'parent_id' => $services->id,
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-magnifying-glass',
        ]);

        // =============================
        // 3. Mega menu 1 - Products
        // =============================
        $products = Navbar::create([
            'title' => 'Products',
            'slug' => 'products',
            'group' => 'header',
            'order' => 5,
            'type' => 'mega',
            'icon' => 'heroicon-o-archive-box',
        ]);

        // Group 1 - Computers
        Navbar::create([
            'title' => 'Laptops',
            'slug' => 'products/laptops',
            'manual_slug' => '/products/laptops',
            'group' => 'Computers',
            'parent_id' => $products->id,
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-computer-desktop',
        ]);
        Navbar::create([
            'title' => 'Desktops',
            'slug' => 'products/desktops',
            'manual_slug' => '/products/desktops',
            'group' => 'Computers',
            'parent_id' => $products->id,
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-server',
        ]);

        // Group 2 - Mobile Devices
        Navbar::create([
            'title' => 'Smartphones',
            'slug' => 'products/smartphones',
            'manual_slug' => '/products/smartphones',
            'group' => 'Mobile Devices',
            'parent_id' => $products->id,
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-device-phone-mobile',
        ]);
        Navbar::create([
            'title' => 'Tablets',
            'slug' => 'products/tablets',
            'manual_slug' => '/products/tablets',
            'group' => 'Mobile Devices',
            'parent_id' => $products->id,
            'order' => 4,
            'type' => 'link',
            'icon' => 'feathericon-tablet',
        ]);

        // Group 3 - Others
        Navbar::create([
            'title' => 'Accessories',
            'slug' => 'products/accessories',
            'manual_slug' => '/products/accessories',
            'group' => 'Others',
            'parent_id' => $products->id,
            'order' => 5,
            'type' => 'link',
            'icon' => 'heroicon-o-paper-clip',
        ]);
        Navbar::create([
            'title' => 'Gaming',
            'slug' => 'products/gaming',
            'manual_slug' => '/products/gaming',
            'group' => 'Others',
            'parent_id' => $products->id,
            'order' => 6,
            'type' => 'link',
            'icon' => 'heroicon-o-puzzle-piece',
        ]);

        // =============================
        // 4. Mega menu 2 - Resources
        // =============================
        $resources = Navbar::create([
            'title' => 'Resources',
            'slug' => 'resources',
            'group' => 'header',
            'order' => 6,
            'type' => 'mega',
            'icon' => 'heroicon-o-book-open',
        ]);

        // Group 1 - Articles
        Navbar::create([
            'title' => 'Blog',
            'slug' => 'resources/blog',
            'manual_slug' => '/resources/blog',
            'group' => 'Articles',
            'parent_id' => $resources->id,
            'order' => 1,
            'type' => 'link',
            'icon' => 'heroicon-o-pencil',
        ]);
        Navbar::create([
            'title' => 'Case Studies',
            'slug' => 'resources/case-studies',
            'manual_slug' => '/resources/case-studies',
            'group' => 'Articles',
            'parent_id' => $resources->id,
            'order' => 2,
            'type' => 'link',
            'icon' => 'heroicon-o-document-chart-bar',
        ]);

        // Group 2 - Learning
        Navbar::create([
            'title' => 'Guides',
            'slug' => 'resources/guides',
            'manual_slug' => '/resources/guides',
            'group' => 'Learning',
            'parent_id' => $resources->id,
            'order' => 3,
            'type' => 'link',
            'icon' => 'heroicon-o-bookmark',
        ]);
        Navbar::create([
            'title' => 'E-books',
            'slug' => 'resources/ebooks',
            'manual_slug' => '/resources/ebooks',
            'group' => 'Learning',
            'parent_id' => $resources->id,
            'order' => 4,
            'type' => 'link',
            'icon' => 'heroicon-o-archive-box',
        ]);

        // Group 3 - Community
        Navbar::create([
            'title' => 'Tutorials',
            'slug' => 'resources/tutorials',
            'manual_slug' => '/resources/tutorials',
            'group' => 'Community',
            'parent_id' => $resources->id,
            'order' => 5,
            'type' => 'link',
            'icon' => 'heroicon-o-academic-cap',
        ]);
        Navbar::create([
            'title' => 'Community',
            'slug' => 'resources/community',
            'manual_slug' => '/resources/community',
            'group' => 'Community',
            'parent_id' => $resources->id,
            'order' => 6,
            'type' => 'link',
            'icon' => 'heroicon-o-users',
        ]);
    }
}
