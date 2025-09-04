<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title data-lang-key="title"></title>


    @vite(['resources/css/prelineui.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="antialiased font-sans text-gray-800 bg-gray-100 flex flex-col min-h-screen items-center justify-center">

    {{ $slot }}
    @livewireScripts

</body>

</html>
