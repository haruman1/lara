<!-- ========== HEADER ========== -->
<header
    class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full before:absolute before:inset-0 before:max-w-5xl before:mx-2 lg:before:mx-auto before:rounded-[26px] before:bg-neutral-800/30 before:backdrop-blur-md">
    <nav class="relative max-w-5xl w-full flex flex-wrap md:flex-nowrap basis-full items-center justify-between py-2 ps-5 pe-2 md:py-0 mx-2 lg:mx-auto"
        id="navbar">
        <div class="flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                href="../templates/agency/index.html" aria-label="Preline">
                <!-- Logo Light -->
                <img src="/images/icon/zd3rcd6ftavhpy4xgki9.webp" class="w-28 h-auto dark:hidden" width="116"
                    height="32" alt="Logo Light">

                <!-- Logo Dark -->
                <img src="/images/icon/wcern2cczvex3oqhqzpf.webp" class="w-28 h-auto hidden dark:block" width="116"
                    height="32" alt="Logo Dark">
            </a>
            <!-- End Logo -->

            <div class="ms-1 sm:ms-2">

            </div>
        </div>

        <!-- Button Group -->
        <div class="md:order-3 flex items-center gap-x-3">
            <div class="md:ps-6">
                <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-nowrap text-neutral-800 rounded-full focus:outline-hidden"
                    data-lang-key="sign-in" href="{{ route('login') }}">
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
                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-blue-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-blue-500"
                    href="#landing" aria-current="page" data-target="landing" data-lang-key="link-1">Home</a>
                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300"
                    href="#services" data-target="services" data-lang-key="link-2">Layanan kami</a>
                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300"
                    href="#aboutus" data-target="featured" data-lang-key="link-3">Tentang kami</a>

                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300"
                    href="#informations" data-target="informations" data-lang-key="link-4">Informasi</a>
                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300"
                    href="#teams" data-target="teams" data-lang-key="link-5">Team</a>
                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300"
                    href="#faq" data-target="faq" data-lang-key="link-6">Faq</a>
                <!-- Dropdown Link -->
                <div
                    class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--auto-close:inside] md:inline-block">
                    <!-- Link Button -->
                    <button id="hs-pro-anpd" type="button"
                        class="hs-dropdown-toggle md:px-3 md:py-4 w-full md:w-auto flex items-center text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Product
                        <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 ms-auto md:ms-1 shrink-0 size-3.5"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <!-- End Link Button -->

                    <!-- Dropdown Menu -->
                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] lg:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-150 hidden z-10 top-full end-0 rounded-2xl bg-neutral-800 p-1 before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden mt-2 md:mt-0"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-anpd">
                        <div class="flex flex-col gap-y-1">
                            <!-- Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                <div
                                    class="p-5 min-h-50 flex flex-col justify-between bg-neutral-900 rounded-t-xl md:rounded-tr-none md:rounded-tl-xl">
                                    <!-- Heading -->
                                    <div class="mb-5">
                                        <a class="group flex items-center gap-x-2 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                            href="#">
                                            Build
                                            <span
                                                class="ms-auto size-6 flex shrink-0 justify-center items-center bg-[#ff0] text-black rounded-sm">
                                                <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- End Heading -->

                                    <!-- List -->
                                    <ul class="flex flex-col">
                                        <li
                                            class="py-2 first:pt-0 last:pb-0 first:border-t-0 border-t border-neutral-800">
                                            <a class="group flex items-center gap-x-2 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                href="#">
                                                <span class="size-1 bg-[#ff0] rounded-full"></span>
                                                Websites
                                                <span class="ms-auto size-6 flex shrink-0 justify-center items-center">
                                                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>

                                        <li
                                            class="py-2 first:pt-0 last:pb-0 first:border-t-0 border-t border-neutral-800">
                                            <a class="group flex items-center gap-x-2 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                href="#">
                                                <span class="size-1 bg-[#ff0] rounded-full"></span>
                                                Mobile apps
                                                <span class="ms-auto size-6 flex shrink-0 justify-center items-center">
                                                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>

                                        <li
                                            class="py-2 first:pt-0 last:pb-0 first:border-t-0 border-t border-neutral-800">
                                            <a class="group flex items-center gap-x-2 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                href="#">
                                                <span class="size-1 bg-[#ff0] rounded-full"></span>
                                                Pages
                                                <span class="ms-auto size-6 flex shrink-0 justify-center items-center">
                                                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <!-- End Col -->

                                <div
                                    class="p-5 min-h-50 flex flex-col justify-between bg-neutral-900 md:rounded-tr-xl">
                                    <!-- Heading -->
                                    <div class="mb-5">
                                        <a class="group flex items-center gap-x-3 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                            href="#">
                                            Resources
                                            <span
                                                class="ms-auto size-6 flex shrink-0 justify-center items-center bg-[#ff0] text-black rounded-sm">
                                                <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- End Heading -->

                                    <!-- List -->
                                    <ul class="flex flex-col">
                                        <li
                                            class="py-2 first:pt-0 last:pb-0 first:border-t-0 border-t border-neutral-800">
                                            <a class="group flex items-center gap-x-2 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                href="#">
                                                <span class="size-1 bg-[#ff0] rounded-full"></span>
                                                Documentation
                                                <span class="ms-auto size-6 flex shrink-0 justify-center items-center">
                                                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>

                                        <li
                                            class="py-2 first:pt-0 last:pb-0 first:border-t-0 border-t border-neutral-800">
                                            <a class="group flex items-center gap-x-2 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                href="#">
                                                <span class="size-1 bg-[#ff0] rounded-full"></span>
                                                Support
                                                <span class="ms-auto size-6 flex shrink-0 justify-center items-center">
                                                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->

                            <!-- Footer -->
                            <div class="p-2 bg-neutral-900 rounded-b-xl">
                                <div class="flex flex-wrap justify-between items-center gap-1">
                                    <a class="py-1.5 ps-3 pe-2 group flex items-center gap-x-1 font-medium text-sm text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                        href="#">
                                        Sessions 2025 ‐ Watch the product keynote live
                                        <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </a>

                                    <a class="py-1.5 px-3 font-medium text-sm text-[#ff0] rounded-full hover:bg-neutral-800 focus:outline-hidden focus:bg-neutral-800"
                                        href="#">
                                        Changelog
                                    </a>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div>
                    <!-- End Dropdown Menu -->
                </div>
                <!-- End Dropdown Link -->
            </div>
        </div>
        <!-- End Collapse -->
    </nav>

</header>
<!-- ========== END HEADER ========== -->
