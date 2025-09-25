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
                'manual_slug' => 'home',
                'title' => 'Beranda - Bcompnetsolutions Indonesia',
                'meta_description' => 'Bcompnetsolutions Indonesia adalah perusahaan teknologi terkemuka yang menyediakan solusi IT inovatif untuk bisnis Anda. Kami memahami kebutuhan Anda dan memberikan solusi terbaik dengan teknologi terbaru.',
                'meta_keywords' => 'home, beranda, website, Bcompnetsolutions, solusi IT, teknologi, bisnis',
                'og_title' => 'Beranda - Bcompnetsolutions Indonesia',
                'og_description' => 'Bcompnetsolutions Indonesia adalah perusahaan teknologi terkemuka yang menyediakan solusi IT inovatif untuk bisnis Anda. Kami memahami kebutuhan Anda dan memberikan solusi terbaik dengan teknologi terbaru.',
                'og_type' => 'website',
                'og_url' => url('/'),
                'og_image' => url('/images/logo.png'),
                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'Beranda - Bcompnetsolutions Indonesia',
                'twitter_description' => 'Bcompnetsolutions Indonesia adalah perusahaan teknologi terkemuka yang menyediakan solusi IT inovatif untuk bisnis Anda. Kami memahami kebutuhan Anda dan memberikan solusi terbaik dengan teknologi terbaru.',
                'twitter_image' => url('/images/logo.png'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        SeoPage::updateOrCreate(
            ['slug' => 'about'],
            [
                'manual_slug' => '/about',
                'title' => 'Tentang Kami - Bcompnetsolutions Indonesia',
                'meta_description' => 'Profil perusahaan dan visi misi Bcompnetsolutions Indonesia. Kami berkomitmen untuk memberikan solusi IT terbaik bagi bisnis Anda dengan teknologi terbaru dan layanan profesional.',
                'meta_keywords' => 'tentang, profil, perusahaan, Bcompnetsolutions, solusi IT, teknologi, bisnis',
                'og_title' => 'Tentang Kami - Bcompnetsolutions Indonesia',
                'og_description' => 'Profil perusahaan dan visi misi Bcompnetsolutions Indonesia. Kami berkomitmen untuk memberikan solusi IT terbaik bagi bisnis Anda dengan teknologi terbaru dan layanan profesional.',
                'og_type' => 'article',
                'og_url' => url('/about'),
                'og_image' => url('/images/logo.png'),
                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'Tentang Kami - Bcompnetsolutions Indonesia',
                'twitter_description' => 'Profil perusahaan dan visi misi Bcompnetsolutions Indonesia. Kami berkomitmen untuk memberikan solusi IT terbaik bagi bisnis Anda dengan teknologi terbaru dan layanan profesional.',
                'twitter_image' => url('/images/logo.png'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        SeoPage::updateOrCreate(
            ['slug' => 'contact'],
            [
                'manual_slug' => '/contact',
                'title' => 'Kontak Kami - Bcompnetsolutions Indonesia',
                'meta_description' => 'Hubungi kami melalui email, telepon, atau form kontak. Kami siap membantu Anda dengan solusi IT yang tepat untuk bisnis Anda.',
                'meta_keywords' => 'kontak, email, telepon, form kontak, Bcompnetsolutions, solusi IT, teknologi, bisnis',
                'og_title' => 'Kontak Kami - Bcompnetsolutions Indonesia',
                'og_description' => 'Hubungi kami melalui email, telepon, atau form kontak. Kami siap membantu Anda dengan solusi IT yang tepat untuk bisnis Anda.',
                'og_type' => 'article',
                'og_url' => url('/contact'),
                'og_image' => url('/images/logo.png'),
                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'Kontak Kami - Bcompnetsolutions Indonesia',
                'twitter_description' => 'Hubungi kami melalui email, telepon, atau form kontak. Kami siap membantu Anda dengan solusi IT yang tepat untuk bisnis Anda.',
                'twitter_image' => url('/images/logo.png'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        SeoPage::updateOrCreate(
            ['slug' => 'services'],
            [
                'manual_slug' => '/services',
                'title' => 'Layanan Kami - Bcompnetsolutions Indonesia',
                'meta_description' => 'Jelajahi berbagai layanan IT yang kami tawarkan untuk membantu bisnis Anda berkembang dengan teknologi terbaru dan solusi inovatif.',
                'meta_keywords' => 'layanan, solusi IT, teknologi, bisnis, Bcompnetsolutions',
                'og_title' => 'Layanan Kami - Bcompnetsolutions Indonesia',
                'og_description' => 'Jelajahi berbagai layanan IT yang kami tawarkan untuk membantu bisnis Anda berkembang dengan teknologi terbaru dan solusi inovatif.',
                'og_type' => 'article',
                'og_url' => url('/services'),
                'og_image' => url('/images/logo.png'),
                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'Layanan Kami - Bcompnetsolutions Indonesia',
                'twitter_description' => 'Jelajahi berbagai layanan IT yang kami tawarkan untuk membantu bisnis Anda berkembang dengan teknologi terbaru dan solusi inovatif.',
                'twitter_image' => url('/images/logo.png'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
