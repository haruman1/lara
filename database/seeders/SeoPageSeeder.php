<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeoPage;

class SeoPageSeeder extends Seeder
{
    public function run(): void
    {
        SeoPage::updateOrCreate(
            ['slug' => 'home'],
            [
                'title' => 'Beranda - My Website',
                'meta_description' => 'Selamat datang di website kami.',
                'meta_keywords' => 'home, beranda, website',
                'og_title' => 'Beranda - My Website',
                'og_description' => 'Website terbaik untuk informasi dan layanan.',
                'og_type' => 'website',
                'og_url' => url('/'),
            ]
        );

        SeoPage::updateOrCreate(
            ['slug' => 'about'],
            [
                'title' => 'Tentang Kami - My Website',
                'meta_description' => 'Profil perusahaan dan visi misi.',
                'meta_keywords' => 'tentang, profil, perusahaan',
                'og_title' => 'Tentang Kami',
                'og_description' => 'Kenali lebih jauh tentang perusahaan kami.',
                'og_type' => 'article',
                'og_url' => url('/about'),
            ]
        );

        SeoPage::updateOrCreate(
            ['slug' => 'contact'],
            [
                'title' => 'Kontak Kami - My Website',
                'meta_description' => 'Hubungi kami melalui email atau telepon.',
                'meta_keywords' => 'kontak, hubungi, support',
                'og_title' => 'Kontak Kami',
                'og_description' => 'Kami siap membantu Anda.',
                'og_type' => 'article',
                'og_url' => url('/contact'),
            ]
        );
    }
}
