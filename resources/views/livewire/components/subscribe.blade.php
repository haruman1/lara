<section id="subscribe" class="bg-gray-50 dark:bg-neutral-900 py-16">
    <div class="max-w-2xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Berlangganan Newsletter Kami</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-8">
            Dapatkan update terbaru, artikel inspiratif, dan penawaran eksklusif langsung ke inbox Anda.
        </p>
        <form wire:submit.prevent="subscribe" class="flex flex-col sm:flex-row gap-4">
            <input type="email" wire:model="email" placeholder="Masukkan email Anda" required
                class="w-full sm:flex-1 px-4 py-3 border border-gray-300 dark:border-neutral-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-neutral-800 dark:text-white" />
            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Berlangganan
            </button>
        </form>
        @if (session()->has('message'))
            <p class="mt-4 text-green-600 dark:text-green-400">{{ session('message') }}</p>
        @endif
        @error('email')
            <p class="mt-4 text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

</section>
