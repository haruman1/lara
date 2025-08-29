<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'haruman') }}</title>
    <!-- Add the slick-theme.css if you want default styling -->

    @vite(['resources/css/globals.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased">
    {{ $slot }}
    @livewireScripts

</body>

</html>
