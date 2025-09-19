{{-- --}}

@props(['menu', 'isMobile' => false])

@if ($menu->children->isNotEmpty())
    @if ($isMobile)
        <!-- Mobile Dropdown -->
        <div x-data="{ open: false }" class="w-full">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400">
                {{ $menu->title }}
                <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 ml-2 transition-transform"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div x-show="open" x-collapse class="pl-4">
                @foreach ($menu->children as $child)
                    @include('livewire.partials.nav-item', ['menu' => $child, 'isMobile' => true])
                @endforeach
            </div>
        </div>
    @else
        <!-- Desktop Dropdown / Mega -->
        <div class="hs-dropdown relative group">
            <button type="button"
                class="hs-dropdown-toggle flex items-center px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400">
                {{ $menu->title }}
                <svg class="w-4 h-4 ml-1 hs-dropdown-open:-rotate-180 transition-transform"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Mega vs Dropdown -->
            <div
                class="hs-dropdown-menu hidden {{ $menu->type === 'mega' ? 'w-[800px] grid grid-cols-3 gap-6 p-6' : 'min-w-[200px] p-2' }} bg-white border rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700">
                @if ($menu->type === 'mega')
                    @foreach ($menu->children->groupBy('group') as $groupName => $items)
                        <div>
                            <h4 class="text-gray-700 dark:text-gray-300 font-semibold mb-2">{{ $groupName }}</h4>
                            <ul class="space-y-2">
                                @foreach ($items as $child)
                                    @include('livewire.partials.nav-item', ['menu' => $child])
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                @else
                    <ul class="space-y-1">
                        @foreach ($menu->children as $child)
                            @include('livewire.partials.nav-item', ['menu' => $child])
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    @endif
@else
    <!-- Normal Link -->
    <a href="{{ url($menu->resolved_slug ?? '#') }}"
        class="px-3 py-2 flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">
        @if ($menu->icon)
            <x-dynamic-component :component="$menu->icon" class="shrink-0 size-4 me-2" />
        @endif
        {{ $menu->title }}
    </a>
@endif
