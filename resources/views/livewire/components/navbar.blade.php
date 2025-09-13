<!-- ========== HEADER ========== -->
<header
    class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full before:absolute before:inset-0 before:max-w-5xl before:mx-2 lg:before:mx-auto before:rounded-[26px] before:bg-neutral-800/30 before:backdrop-blur-md">
    <nav class="relative max-w-5xl w-full flex flex-wrap md:flex-nowrap basis-full items-center justify-between py-2 ps-5 pe-2 md:py-0 mx-2 lg:mx-auto"
        id="navbar">

        <!-- Logo -->
        <div class="flex items-center">
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                href="#landing" aria-label="Preline">
                <!-- Logo Light -->
                <img src="/images/icon/zd3rcd6ftavhpy4xgki9.webp" class="w-28 h-auto dark:hidden" width="116"
                    height="32" alt="Logo Light">

                <!-- Logo Dark -->
                <img src="/images/icon/wcern2cczvex3oqhqzpf.webp" class="w-28 h-auto hidden dark:block" width="116"
                    height="32" alt="Logo Dark">
            </a>
        </div>
        <!-- End Logo -->

        <!-- Button Group -->
        <div class="md:order-3 flex items-center gap-x-3">
            <div class="md:ps-6">
                <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-nowrap text-neutral-800 rounded-full focus:outline-hidden"
                    data-lang-key="sign-in" href="{{ route('login') }}" wire:navigate>
                    Sign In
                </a>
            </div>

            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-full bg-neutral-800 text-white disabled:opacity-50 disabled:pointer-events-none"
                    id="hs-navbar-floating-dark-collapse" aria-expanded="false" aria-controls="hs-navbar-floating-dark"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-floating-dark">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- End Button Group -->

        <!-- Collapse -->
        <div id="hs-navbar-floating-dark"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
            aria-labelledby="hs-navbar-floating-dark-collapse">
            <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-y-3 py-2 md:py-0 md:ps-7">

                <!-- Navigation Links -->
                <a href="{{ route('home') }}" wire:navigate data-target="landing" data-lang-key="link-1"
                    aria-current="{{ request()->is('/') || request()->is('home') ? 'page' : 'false' }}"
                    class="pe-3 ps-px sm:px-3 md:py-4 text-sm 
          text-white hover:text-neutral-300 focus:outline-hidden
          border-b-2 border-transparent 
          aria-[current=page]:border-[#ff0] aria-[current=page]:text-[#ff0]">
                    Home
                </a>


                <a href="/services" wire:navigate data-target="services" data-lang-key="link-2"
                    class="pe-3 ps-px sm:px-3 md:py-4 text-sm 
                   text-white hover:text-neutral-300 focus:outline-hidden
                   border-b-2 border-transparent 
                   aria-[current=page]:border-[#ff0] aria-[current=page]:text-[#ff0]">
                    Layanan kami
                </a>

                <a href="{{ route('about.page') }}" wire:navigate data-target="aboutus" data-lang-key="link-3"
                    class="pe-3 ps-px sm:px-3 md:py-4 text-sm 
                   text-white hover:text-neutral-300 focus:outline-hidden
                   border-b-2 border-transparent 
                   aria-[current=page]:border-[#ff0] aria-[current=page]:text-[#ff0]">
                    Tentang kami
                </a>

                <a href="/acak" wire:navigate data-target="informations" data-lang-key="link-4"
                    class="pe-3 ps-px sm:px-3 md:py-4 text-sm 
                   text-white hover:text-neutral-300 focus:outline-hidden
                   border-b-2 border-transparent 
                   aria-[current=page]:border-[#ff0] aria-[current=page]:text-[#ff0]">
                    Informasi
                </a>
                <a href="{{ route('post.index') }}" wire:navigate data-target="news"
                    class="pe-3 ps-px sm:px-3 md:py-4 text-sm 
                   text-white hover:text-neutral-300 focus:outline-hidden
                   border-b-2 border-transparent 
                   aria-[current=page]:border-[#ff0] aria-[current=page]:text-[#ff0]">
                    News
                </a>
                <a href="/acal" wire:navigate data-target="contact" data-lang-key="link-5"
                    class="pe-3 ps-px sm:px-3 md:py-4 text-sm 
                   text-white hover:text-neutral-300 focus:outline-hidden
                   border-b-2 border-transparent 
                   aria-[current=page]:border-[#ff0] aria-[current=page]:text-[#ff0]">
                    Kontak
                </a>
                <!-- End Navigation Links -->

            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->
