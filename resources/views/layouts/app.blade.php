<!doctype html>
<html lang="en" class="transition-colors duration-500 ease-in-out">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'haruman') }}</title>
    <!-- Add the slick-theme.css if you want default styling -->

    @vite(['resources/css/prelineui.css', 'resources/js/app.js'])
    @livewireStyles
    <script>
        (function() {
            const html = document.documentElement;
            const storedTheme = localStorage.getItem('hs_theme');
            const isSystemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (storedTheme === 'dark' || (!storedTheme && isSystemDark)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
        })();
    </script>

</head>

<body class="antialiased">
    {{ $slot }}
    @livewireScripts

</body>

</html>
