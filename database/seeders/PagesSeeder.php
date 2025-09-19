<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {



        Pages::updateOrCreate(
            ['slug' => 'about'],
            [
                'title' => 'About Us',
                'image' => null,
                'slug' => 'about',
                'content' => '<h1>About Us</h1><p>This is the about page content.</p>',
                'author_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        Pages::updateOrCreate(
            ['slug' => 'services'],
            [
                'title' => 'Our Services',
                'image' => null,
                'slug' => 'services',
                'content' => '<h1>Our Services</h1><p>This is the services page content.</p>',
                'author_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        Pages::updateOrCreate(
            ['slug' => 'contact'],
            [
                'title' => 'Contact Us',
                'image' => null,
                'slug' => 'contact',
                'content' => '<h1>Contact Us</h1><p>This is the contact page content.</p>',
                'author_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
