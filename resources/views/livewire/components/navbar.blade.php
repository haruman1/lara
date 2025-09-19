@php
    use App\Models\Navbar;

    // Ambil menu utama + 3 level children
    $menus = Navbar::with('children.children.children')->whereNull('parent_id')->orderBy('order')->get();
@endphp

<nav class="sticky top-0 z-50 bg-white dark:bg-neutral-900 border-b border-gray-200 dark:border-neutral-700">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex-none rounded-md text-xl font-semibold">
                <img src="/images/icon/zd3rcd6ftavhpy4xgki9.webp" class="w-28 dark:hidden" alt="Logo Light">
                <img src="/images/icon/wcern2cczvex3oqhqzpf.webp" class="w-28 hidden dark:block" alt="Logo Dark">
            </a>
            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-4">
                @foreach ($menus as $menu)
                    @include('livewire.partials.nav-item', ['menu' => $menu])
                @endforeach
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle p-2 inline-flex items-center justify-center rounded-md text-gray-700 hover:text-gray-900 focus:outline-none"
                    id="mobile-menu-button" aria-controls="mobile-menu" aria-label="Toggle navigation"
                    data-hs-collapse="#mobile-menu">
                    <svg class="h-6 w-6 hs-collapse-open:hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 hidden hs-collapse-open:block" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hs-collapse hidden md:hidden bg-white dark:bg-neutral-900 border-t border-gray-200 dark:border-neutral-700">
        <div class="px-4 pt-4 pb-6 space-y-2">
            @foreach ($menus as $menu)
                @include('livewire.partials.nav-item', ['menu' => $menu])
            @endforeach
        </div>
    </div>
</nav>
