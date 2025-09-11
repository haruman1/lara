<?php

use function Livewire\Volt\{mount, state, on, action};

mount(function () {
    dispatch('updateHeader', 'Dashboard');
    dispatch('updateFooter', 'Footer khusus Dashboard');
});
?>

<section id="aboutus" class="w-full top-0 bg-white dark:bg-gray-900">
    <livewire:components.navbar />
    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white" data-lang-key="about-us-header">Tentang Kami</h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto" data-lang-key="about-us-subheader">
                Kami berkomitmen menghadirkan inovasi, transformasi, dan kepemimpinan yang berkelanjutan.
            </p>
        </div>

        <!-- Langkah Transformasi -->
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6" data-lang-key="about-us-step-header">
                Langkah Transformasi</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-white dark:bg-neutral-800 rounded-2xl shadow">
                    <h4 class="font-semibold text-lg text-indigo-600 mb-2" data-lang-key="about-us-step-1-title">1.
                        Inovasi
                    </h4>
                    <p class="text-gray-600 dark:text-gray-300" data-lang-key="about-us-step-1-desc">Mengembangkan
                        produk dan layanan berbasis teknologi
                        terbaru untuk memenuhi kebutuhan pelanggan.</p>
                </div>
                <div class="p-6 bg-white dark:bg-neutral-800 rounded-2xl shadow">
                    <h4 class="font-semibold text-lg text-indigo-600 mb-2" data-lang-key="about-us-step-2-title">2.
                        Digitalisasi</h4>
                    <p class="text-gray-600 dark:text-gray-300" data-lang-key="about-us-step-2-desc">Mengadopsi sistem
                        digital dalam setiap lini bisnis untuk
                        efisiensi dan transparansi.</p>
                </div>
                <div class="p-6 bg-white dark:bg-neutral-800 rounded-2xl shadow">
                    <h4 class="font-semibold text-lg text-indigo-600 mb-2" data-lang-key="about-us-step-3-title">3.
                        Kolaborasi</h4>
                    <p class="text-gray-600 dark:text-gray-300" data-lang-key="about-us-step-3-desc">Membangun kerja
                        sama strategis dengan berbagai pihak
                        demi tercapainya pertumbuhan bersama.</p>
                </div>
            </div>
        </div>

        <!-- Visi dan Misi -->
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6" data-lang-key="vision-header">Visi &
                Misi</h3>
            <div class="bg-white dark:bg-neutral-800 rounded-2xl shadow p-8">
                <h4 class="font-bold text-xl text-indigo-600 mb-4" data-lang-key="vision-header">Visi</h4>
                <p class="text-gray-600 dark:text-gray-300 mb-6" data-lang-key="vision-subheader">Menjadi perusahaan
                    terdepan dalam inovasi digital yang
                    memberikan dampak positif bagi masyarakat.</p>
                <h4 class="font-bold text-xl text-indigo-600 mb-4" data-lang-key="mission-header">Misi</h4>
                <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                    <li data-lang-key="mission-point-1">Menciptakan solusi digital yang relevan dan bermanfaat.</li>
                    <li data-lang-key="mission-point-2">Mendorong transformasi bisnis melalui teknologi.</li>
                    <li data-lang-key="mission-point-3">Membangun budaya kerja yang kolaboratif dan berintegritas.</li>
                </ul>
            </div>
        </div>

        <!-- Manajemen (Our Leaders) -->
        <livewire:components.team-selections />
        <livewire:components.float-button />

    </div>
    <livewire:components.footer />
</section>
