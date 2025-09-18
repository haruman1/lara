@php
    // cek active untuk link biasa
    $isActive = request()->is(trim($menu->slug, '/'))
        ? 'text-blue-600 dark:text-blue-400 font-semibold bg-gray-100 dark:bg-neutral-700'
        : '';

    // cek active untuk dropdown (jika ada child aktif)
    $hasActiveChild = $menu->children->contains(fn($child) => request()->is(trim($child->slug, '/')));
@endphp

@if ($menu->children->count())
    <!-- Dropdown -->
    <div class="hs-dropdown relative">
        <button type="button"
            class="hs-dropdown-toggle w-full p-2 flex items-center text-sm rounded-lg transition-colors
                {{ $hasActiveChild ? 'text-blue-600 dark:text-blue-400 font-semibold bg-gray-100 dark:bg-neutral-700' : 'text-gray-800 hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700' }}">
            @if ($menu->icon)
                {!! $menu->icon !!}
            @endif
            {{ $menu->title }}
            <svg class="hs-dropdown-open:-rotate-180 duration-300 shrink-0 size-4 ms-auto"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
        </button>

        <div
            class="hs-dropdown-menu hidden mt-2 w-48 bg-white border rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700">
            <ul class="py-2">
                @foreach ($menu->children as $child)
                    @include('livewire.partials.nav-item', ['menu' => $child])
                @endforeach
            </ul>
        </div>
    </div>
@else
    <!-- Link biasa -->
    <a href="{{ url($menu->slug) }}"
        class="p-2 flex items-center text-sm rounded-lg transition-colors
            {{ $isActive ?: 'text-gray-800 hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700' }}">
        @if ($menu->icon)
            <x-dynamic-component :component="$menu->icon" class="shrink-0 size-4 me-2" />
        @endif
        {{ $menu->title }}
    </a>
@endif
