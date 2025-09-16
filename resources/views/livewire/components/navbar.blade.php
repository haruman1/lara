<!-- ========== HEADER ========== -->
<header
    class="sticky top-0 inset-x-0 bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav
        class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 px-4 sm:px-6 lg:px-8 py-2">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                href="{{ route('home') }}" aria-label="Logo Bcompnet">
                <img src="/images/icon/zd3rcd6ftavhpy4xgki9.webp" class="w-28 h-auto dark:hidden" width="116"
                    height="32" alt="Logo Light">
                <!-- Logo Dark -->
                <img src="/images/icon/wcern2cczvex3oqhqzpf.webp" class="w-28 h-auto hidden dark:block" width="116"
                    height="32" alt="Logo Dark">
            </a>
            <!-- End Logo -->

            <!-- Collapse Button -->
            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    id="hs-header-scrollspy-collapse" aria-expanded="false" aria-controls="hs-header-scrollspy"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-scrollspy">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->

        <!-- Collapse -->
        <div id="hs-header-scrollspy"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
            aria-labelledby="hs-header-scrollspy-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div data-hs-scrollspy="#scrollspy"
                    class="py-2 md:py-0 [--scrollspy-offset:220] md:[--scrollspy-offset:70] flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-100 dark:hs-scrollspy-active:bg-neutral-700 active"
                        href="{{ route('home') }}" data-lang-key="link-1">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        </svg>
                        Home
                    </a>

                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-100 dark:hs-scrollspy-active:bg-neutral-700"
                        href="{{ route('page.services') }}" data-lang-key="link-2">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Services
                    </a>

                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-100 dark:hs-scrollspy-active:bg-neutral-700"
                        href="{{ route('page.about') }}" data-lang-key="link-3">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 12h.01" />
                            <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                            <path d="M22 13a18.15 18.15 0 0 1-20 0" />
                            <rect width="20" height="14" x="2" y="6" rx="2" />
                        </svg>
                        About
                    </a>

                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-100 dark:hs-scrollspy-active:bg-neutral-700"
                        href="{{ route('post.index') }}" data-lang-key="link-4">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                            <path d="M18 14h-8" />
                            <path d="M15 18h-5" />
                            <path d="M10 6h8v4h-8V6Z" />
                        </svg>
                        Blog
                    </a>
                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-100 dark:hs-scrollspy-active:bg-neutral-700"
                        href="{{ route('login') }}" data-lang-key="sign-in">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>

                        Sign In
                    </a>


                    <!-- Dropdown -->
                    <div
                        class="hs-dropdown relative [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--adaptive:adaptive] [--is-collapse:true] md:[--is-collapse:false] ">
                        <button id="hs-header-scrollspy-dropdown" type="button"
                            class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-100 dark:hs-scrollspy-active:bg-neutral-700"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m3 10 2.5-2.5L3 5" />
                                <path d="m3 19 2.5-2.5L3 14" />
                                <path d="M10 6h11" />
                                <path d="M10 12h11" />
                                <path d="M10 18h11" />
                            </svg>
                            Dropdown
                            <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <!-- Mega Menu -->
                        <div
                            class="hs-dropdown-menu hidden lg:absolute top-full lg:right-0 mt-2 z-40 w-full lg:w-[700px] bg-white border shadow-md rounded-lg transition-[opacity,margin] duration-200 hs-dropdown-open:opacity-100 opacity-0 hs-dropdown-open:mt-2 mt-0 dark:bg-neutral-900 dark:border-neutral-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 py-8">

                                <!-- Column 1 -->
                                <div>
                                    <button type="button"
                                        class="collapse-toggle flex justify-between items-center w-full font-semibold text-gray-900 dark:text-neutral-200 mb-3 lg:cursor-default"
                                        data-collapse-toggle="#explore-collapse">
                                        Explore
                                        <svg class="ml-2 size-4 transition-transform lg:hidden"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div id="explore-collapse"
                                        class="hidden lg:block transition-[height] duration-300">
                                        <ul class="space-y-2">
                                            <li><a href="#first" class="block hover:text-blue-600">First</a></li>
                                            <li><a href="#second" class="block hover:text-blue-600">Second</a></li>
                                            <li><a href="#three" class="block hover:text-blue-600">Third</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Column 2 -->
                                <div>
                                    <button type="button"
                                        class="collapse-toggle flex justify-between items-center w-full font-semibold text-gray-900 dark:text-neutral-200 mb-3 lg:cursor-default"
                                        data-collapse-toggle="#monitor-collapse">
                                        Monitor Anything
                                        <svg class="ml-2 size-4 transition-transform lg:hidden"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div id="monitor-collapse"
                                        class="hidden lg:block transition-[height] duration-300">
                                        <ul class="space-y-2">
                                            <li><a href="/network" class="block hover:text-blue-600">Network</a></li>
                                            <li><a href="/server" class="block hover:text-blue-600">Server</a></li>
                                            <li><a href="/cloud" class="block hover:text-blue-600">Cloud</a></li>
                                            <li><a href="/vmware" class="block hover:text-blue-600">VMware</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Column 3 -->
                                <div>
                                    <button type="button"
                                        class="collapse-toggle flex justify-between items-center w-full font-semibold text-gray-900 dark:text-neutral-200 mb-3 lg:cursor-default"
                                        data-collapse-toggle="#about-collapse">
                                        About
                                        <svg class="ml-2 size-4 transition-transform lg:hidden"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div id="about-collapse" class="hidden lg:block transition-[height] duration-300">
                                        <ul class="space-y-2">
                                            <li><a href="/release" class="block hover:text-blue-600">Release Notes</a>
                                            </li>
                                            <li><a href="/security" class="block hover:text-blue-600">Security
                                                    Policy</a></li>
                                            <li><a href="/roadmap" class="block hover:text-blue-600">Roadmap</a></li>
                                            <li><a href="/license" class="block hover:text-blue-600">License</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->
