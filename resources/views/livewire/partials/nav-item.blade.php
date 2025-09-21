<div class="flex flex-col md:flex-row md:items-center gap-1">
    @foreach ($menus as $menu)
        @if ($menu->type === 'mega')
            <!-- 🔹 Mega Menu -->
            <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none]">
                <button type="button"
                    class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700">
                    @if ($menu->icon)
                        @svg($menu->icon, 'w-4 h-4 mr-2')
                    @endif
                    {{ $menu->title }}
                    <svg class="hs-dropdown-open:-rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                        xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    class="hs-dropdown-menu hidden opacity-0 transition-all duration-200 md:duration-300 hs-dropdown-open:opacity-100 relative w-full min-w-60 z-10 top-full start-0">
                    <div class="md:mx-6 lg:mx-8 md:bg-white md:rounded-lg md:shadow-md dark:md:bg-neutral-800">
                        <div class="py-1 md:p-2 md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($menu->children as $child)
                                <a href="{{ $child->url }}"
                                    class="p-3 flex gap-x-4 hover:bg-gray-100 rounded-lg dark:hover:bg-neutral-700">
                                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $child->title }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($menu->type === 'dropdown')
            <!-- 🔹 Dropdown Menu -->
            <div class="hs-dropdown relative inline-flex">
                <button type="button"
                    class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700">
                    @if ($menu->icon)
                        @svg($menu->icon, 'w-4 h-4 mr-2')
                    @endif
                    {{ $menu->title }}
                    <svg class="hs-dropdown-open:-rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                        xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    class="hs-dropdown-menu hidden z-10 mt-2 min-w-48 bg-white shadow-md rounded-lg dark:bg-neutral-800">
                    <div class="p-1 space-y-1">
                        @foreach ($menu->children as $child)
                            <a href="{{ $child->url }}"
                                class="flex items-center gap-x-2 py-2 px-3 text-sm text-gray-800 rounded-md hover:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700">
                                {{ $child->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <!-- 🔹 Single Link -->
            <a href="{{ $menu->url }}"
                class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700">
                @if ($menu->icon)
                    @svg($menu->icon, 'w-4 h-4 mr-2')
                @endif
                {{ $menu->title }}
            </a>
        @endif
    @endforeach
</div>
