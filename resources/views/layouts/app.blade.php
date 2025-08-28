<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Desgy') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/global.css'])
    @livewireStyles
</head>

<body class="antialiased">
    {{ $slot }}
    @livewireScripts
</body>

</html>
