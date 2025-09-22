<!-- ========== HEADER ========== -->
<header
    class="sticky top-0 md:top-0 md:sticky md:flex flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-400 px-4 md:px-6 lg:px-8 dark:bg-neutral-800 dark:border-neutral-700 md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
    <nav
        class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">

        <!-- Logo -->
        <div class="flex justify-between items-center gap-x-3">
            <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white"
                href="{{ url('/') }}" aria-label="Brand">
                <img src="/images/icon/zd3rcd6ftavhpy4xgki9.webp" class="w-28 dark:hidden" alt="Logo Light">
                <img src="/images/icon/wcern2cczvex3oqhqzpf.webp" class="w-28 hidden dark:block" alt="Logo Dark">
            </a>

            <!-- Collapse Button -->
            <button type="button"
                class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                id="mobileMenuToggle" aria-expanded="false" aria-controls="hs-header-base"
                aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
                <svg class="icon-hamburger size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <line x1="3" x2="21" y1="6" y2="6" />
                    <line x1="3" x2="21" y1="12" y2="12" />
                    <line x1="3" x2="21" y1="18" y2="18" />
                </svg>
                <svg class="icon-close shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>

        <!-- Collapse -->
        <div id="navbarMenu" class="hs-collapse hidden overflow-hidden transition-all duration-300 md:block"
            aria-labelledby="hs-header-base-collapse">
            <div class="grow">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center gap-y-1 md:gap-x-6">
                        {{--  --}}
                        <!-- Loop menu dari database -->
                        @foreach ($menus as $menu)
                            @if ($menu->type === 'link')
                                <!-- Single Link -->
                                <a href="{{ $menu->url }}"
                                    class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700">
                                    @svg($menu->icon, 'shrink-0 size-4 me-2 block ')
                                    {{ $menu->title }}
                                </a>
                            @elseif($menu->type === 'dropdown')
                                <!-- Dropdown -->
                                <div class="hs-dropdown relative">
                                    <button id="dropdownToggle" type="button"
                                        data-dropdown-toggle="dropdown-{{ $menu->id }}"
                                        class="hs-dropdown-toggle p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700">
                                        @svg($menu->icon, 'shrink-0 size-4 me-2')
                                        {{ $menu->title }}
                                        <svg class="shrink-0 size-4 ms-1 transition-transform hs-dropdown-open:-rotate-180"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>
                                    <div class="hs-dropdown-menu hidden absolute bg-white shadow-md mt-2 rounded-lg py-2 w-48 dark:bg-neutral-800"
                                        data-dropdown-menu="dropdown-{{ $menu->id }}">
                                        @foreach ($menu->children as $child)
                                            <a href="{{ $child->url }}"
                                                class="flex items-center px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700">
                                                @svg($child->icon, 'shrink-0 size-4 me-2')
                                                <span>{{ $child->title }}</span>
                                            </a>
                                        @endforeach
                                    </div>

                                </div>
                            @elseif($menu->type === 'mega')
                                <!-- Mega Menu -->
                                <div
                                    class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false]">
                                    <button id="megaMenuToggle-{{ $menu->id }}" type="button"
                                        data-mega-toggle="megaMenu-{{ $menu->id }}"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700">
                                        @svg($menu->icon, 'shrink-0 size-4 me-2')
                                        {{ $menu->title }}
                                        <svg id="dropdownIcon-{{ $menu->id }}"
                                            class="hs-dropdown-open:-rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    {{-- id unik untuk setiap mega menu --}}
                                    <div id="megaMenu-{{ $menu->id }}"
                                        data-mega-menu="megaMenu-{{ $menu->id }}"
                                        class="hs-dropdown-menu hidden opacity-0 relative w-full min-w-60 z-10 top-full start-0 transition-all duration-300">
                                        <div
                                            class="md:mx-6 lg:mx-8 md:bg-white md:rounded-lg md:shadow-md dark:md:bg-neutral-800">
                                            <div class="py-4 md:p-6 md:grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                                @foreach ($menu->children->groupBy('group') as $group => $items)
                                                    <div class="flex flex-col">
                                                        <h4
                                                            class="mb-3 font-semibold text-sm uppercase text-gray-700 dark:text-neutral-200">
                                                            {{ $group }}
                                                        </h4>
                                                        @foreach ($items as $child)
                                                            <a href="{{ $child->url }}"
                                                                class="p-2 flex items-center gap-x-2 hover:bg-gray-100 rounded-lg dark:hover:bg-neutral-700">
                                                                @if ($child->icon)
                                                                    @svg($child->icon, 'size-4 text-gray-500 dark:text-neutral-300')
                                                                @endif
                                                                <span
                                                                    class="text-sm text-gray-800 dark:text-neutral-200">
                                                                    {{ $child->title }}
                                                                </span>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- Separator -->
                        <div class="hidden md:block md:mx-3">
                            <div class="w-px h-5 bg-gray-300 dark:bg-neutral-700"></div>
                        </div>

                        <!-- Button Group -->
                        <div class="flex items-center space-x-4">
                            <a class="py-[7px] px-3 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                href="{{ route('login') }}">
                                Sign in
                            </a>
                            <a class="py-2 px-3 inline-flex items-center font-medium text-sm rounded-lg bg-blue-600 text-white hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600"
                                href="{{ route('signup') }}">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const mobileToggle = document.getElementById("mobileMenuToggle");
        const navbarMenu = document.getElementById("navbarMenu");
        const iconHamburger = mobileToggle.querySelector(".icon-hamburger");
        const iconClose = mobileToggle.querySelector(".icon-close");
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll("#navbarMenu a");

        // Intersection Observer untuk active nav
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute("id");
                const navItem = document.querySelector(`#navbarMenu a[href*="#${id}"]`);
                if (entry.isIntersecting) {
                    navLinks.forEach(link => link.classList.remove("active-nav"));
                    if (navItem) navItem.classList.add("active-nav");
                }
            });
        }, {
            threshold: 0.6
        });

        sections.forEach(section => observer.observe(section));

        // Toggle Mobile Menu
        mobileToggle.addEventListener("click", () => {
            navbarMenu.classList.toggle("hidden");
            if (navbarMenu.classList.contains("hidden")) {
                iconHamburger.classList.remove("hidden");
                iconClose.classList.add("hidden");
            } else {
                iconHamburger.classList.add("hidden");
                iconClose.classList.remove("hidden");
            }
        });

        // Smooth scroll link
        navLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                const url = new URL(this.href);
                const targetId = url.hash.substring(1);
                const target = document.getElementById(targetId);

                if (target && window.location.pathname === url.pathname) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });
        // === END ===
        // === MEGA MENU HANDLER (MULTIPLE) ===

        const megaToggles = document.querySelectorAll("[data-mega-toggle]");
        megaToggles.forEach(toggle => {
            const id = toggle.getAttribute("data-mega-toggle");
            const megaMenu = document.querySelector(`[data-mega-menu="${id}"]`);
            const dropdownIcon = toggle.querySelector(".dropdown-icon");

            if (!megaMenu) return;

            // Toggle open/close
            toggle.addEventListener("click", (e) => {
                e.preventDefault();
                megaMenu.classList.toggle("hidden");
                setTimeout(() => megaMenu.classList.toggle("opacity-0"), 10);
                dropdownIcon?.classList.toggle("-rotate-180");
            });

            // Klik di luar close menu
            document.addEventListener("click", (e) => {
                if (!megaMenu.contains(e.target) && !toggle.contains(e.target)) {
                    if (!megaMenu.classList.contains("hidden")) {
                        megaMenu.classList.add("hidden", "opacity-0");
                        dropdownIcon?.classList.remove("-rotate-180");
                    }
                }
            });
        });
    });
</script>
