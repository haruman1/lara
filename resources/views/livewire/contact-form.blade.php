<div>
    {{-- Button buka modal --}}
    <button class="hidden lg:block text-lg font-semibold px-6 py-2 rounded-full border hover:bg-black hover:text-white"
        wire:click="openModal">
        Contact us
    </button>

    {{-- Modal Overlay + Content --}}
    <div x-data="{ open: @entangle('isOpen') }" x-show="open" class="fixed inset-0 z-50 flex items-center justify-center">
        {{-- Background Overlay --}}
        <div x-show="open" x-transition.opacity.duration.300ms class="absolute inset-0 bg-black bg-opacity-50"
            @click="open = false">
        </div>

        {{-- Modal Box --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-90 translate-y-4"
            class="relative bg-white w-full max-w-lg p-6 rounded-2xl shadow-2xl">
            {{-- Header --}}
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl-center font-semibold">Contact Us</h2>
                <button @click="open = false" class="text-gray-500 hover:text-black">
                    ✕
                </button>
            </div>

            {{-- Success message --}}
            @if (session()->has('success'))
                <div class="mb-4 p-3 rounded bg-green-100 text-green-800 animate-pulse">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Form --}}
            <form wire:submit.prevent="send" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Nama</label>
                    <input type="text" wire:model="name"
                        class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-black">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" wire:model="email"
                        class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-black">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Pesan</label>
                    <textarea wire:model="message" rows="4" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-black"></textarea>
                    @error('message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Actions --}}
                <div class="flex justify-end gap-3">
                    <button type="button" @click="open = false" class="px-4 py-2 rounded border hover:bg-gray-100">
                        Batal
                    </button>
                    <button type="submit" class="px-4 py-2 rounded bg-black text-white hover:bg-gray-800">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
