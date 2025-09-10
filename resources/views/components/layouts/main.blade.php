@props([
    'title' => '',
    'siteName' => config('app.name'),
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? "$title — " : '' }}{{ config('app.name') }}</title>

    @vite(['resources/css/blog.css', 'resources/css/prelineui.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-white">
    <div class="flex flex-col min-h-screen">
        <header
            class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full before:absolute before:inset-0 before:max-w-5xl before:mx-2 lg:before:mx-auto before:rounded-[26px] before:bg-neutral-800/30 before:backdrop-blur-md">
            <x-container>
                <nav
                    class="relative max-w-5xl w-full flex flex-wrap md:flex-nowrap basis-full items-center justify-between py-2 ps-5 pe-2 md:py-0 mx-2 lg:mx-auto">
                    <div id="hs-navbar-floating-dark"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
                        aria-labelledby="hs-navbar-floating-dark-collapse">
                        <div
                            class="flex flex-col md:flex-row md:items-center md:justify-end gap-y-3 py-2 md:py-0 md:ps-7">
                            @if ($siteName)
                                <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-blue-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-blue-500"
                                    href="/">{{ $siteName }}</a>
                            @endif

                            <x-menu name="main"
                                class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-hidden focus:text-neutral-300" />
                        </div>
                    </div>
                </nav>
            </x-container>
        </header>

        <main>
            {!! $slot ?? '' !!}
        </main>

        <div class="mt-16"></div>

        <footer class="mt-auto text-center">
            <x-container class="text-gray-700">
                <div class="flex flex-col lg:flex-row items-center justify-center space-x-4">
                    <span>Copyright © {{ date('Y') }} aa inc.</span>
                    <x-menu name="footer" class="lg:ml-auto" />
                </div>
            </x-container>
        </footer>
    </div>
    <livewire:components.float-button />
    @livewireScripts
</body>

</html>
