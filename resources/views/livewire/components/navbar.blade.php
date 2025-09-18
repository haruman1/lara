<!-- ========== HEADER ========== -->
<header
    class="sticky top-0 inset-x-0 bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav
        class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 px-4 sm:px-6 lg:px-8 py-2">

        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between w-full md:w-auto">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                href="{{ route('home') }}" aria-label="Logo Bcompnet">
                <img src="/images/icon/zd3rcd6ftavhpy4xgki9.webp" class="w-28 h-auto dark:hidden" width="116"
                    height="32" alt="Logo Light">
                <img src="/images/icon/wcern2cczvex3oqhqzpf.webp" class="w-28 h-auto hidden dark:block" width="116"
                    height="32" alt="Logo Dark">
            </a>
            <!-- End Logo -->

            <!-- Collapse Button -->
            <button type="button"
                class="hs-collapse-toggle md:hidden inline-flex items-center justify-center size-9 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-100 focus:outline-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700"
                id="hs-header-scrollspy-collapse" data-hs-collapse="#hs-header-scrollspy"
                aria-controls="hs-header-scrollspy" aria-label="Toggle navigation">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->

        <!-- Collapse -->
        <div id="hs-header-scrollspy"
            class="hs-collapse hidden overflow-hidden transition-[max-height,opacity] duration-500 ease-in-out basis-full grow md:block opacity-0 max-h-0"
            aria-labelledby="hs-header-scrollspy-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div data-hs-scrollspy="#scrollspy"
                    class="py-2 md:py-0 [--scrollspy-offset:220] md:[--scrollspy-offset:70] flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">

                    @foreach ($menus as $menu)
                        @include('livewire.partials.nav-item', ['menu' => $menu])
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->
