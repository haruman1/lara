<div>
    {{-- NAVBAR --}}
    <nav class="navbar bg-white shadow">
        <div class="mx-auto max-w-7xl p-3 md:p-4 lg:px-8">
            <div class="relative flex h-12 sm:h-20 items-center justify-between">

                {{-- LOGO --}}
                <a href="/" class="text-2xl sm:text-4xl font-semibold text-black">
                    Desgy Solutions
                </a>

                {{-- DESKTOP LINKS --}}
                <div class="hidden lg:flex space-x-6">
                    @foreach ($navigation as $item)
                        <a href="{{ $item['href'] }}"
                            class="px-3 py-4 text-lg font-normal rounded-md
                                {{ request()->is(ltrim($item['href'], '#')) ? 'bg-gray-900 text-white' : 'hover:text-black' }}">
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </div>
                @livewire('contact-form')
                {{-- CONTACT BUTTON (opsional) --}}
                {{-- <button
                    class="hidden lg:block text-lg font-semibold px-6 py-2 rounded-full border hover:bg-black hover:text-white"
                    href="#contact-section">
                    Contact us
                </button> --}}

                {{-- MOBILE ICON --}}
                <div class="block lg:hidden">
                    <button wire:click="toggleDrawer">
                        <x-heroicon-o-bars-3 class="w-6 h-6" />
                    </button>
                </div>
            </div>
        </div>
    </nav>

    {{-- DRAWER (MOBILE) --}}
    <div x-data="{ open: @entangle('isOpen') }" x-show="open" x-transition.opacity
        class="fixed inset-0 z-50 bg-gray-900 bg-opacity-25">
        {{-- Drawer Content --}}
        <div x-show="open" x-transition:enter="transition transform duration-500"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-500" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" class="absolute left-0 top-0 w-80 h-full bg-white shadow-xl">
            <div class="p-6 space-y-6">
                {{-- Header --}}
                <div class="flex justify-between items-center">
                    <a href="/" class="text-2xl font-semibold text-black">
                        Desgy Solutions
                    </a>
                    <button wire:click="closeDrawer">
                        <x-heroicon-o-x-mark class="w-6 h-6" />
                    </button>
                </div>

                {{-- Links --}}
                <div class="flex flex-col space-y-4">
                    @foreach ($navigation as $item)
                        <a href="{{ $item['href'] }}"
                            class="text-lg px-3 py-2 rounded-md
                                {{ request()->is(ltrim($item['href'], '#')) ? 'bg-gray-900 text-white' : 'hover:bg-gray-100' }}"
                            wire:click="closeDrawer">
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Overlay --}}
        <div class="w-full h-full" @click="open = false"></div>
    </div>
</div>
