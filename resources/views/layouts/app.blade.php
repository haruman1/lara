<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Primary Meta Tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title data-lang-key="title">{{ $title ?? 'Default Title' }}</title>
    <meta name="title" content="bcompnetsolutions Best Solutions for your website" />
    <meta name="description" data-lang-key="description" content="Bcompnet merupakan jasa jasa" />
    <meta name="keywords"
        content="bcompnet, bcompnetsolutions, bcomptech, bcomptechsolutions, jasa pembuatan website, jasa pembuatan aplikasi, jasa pembuatan sistem informasi" />
    <meta name="author" content="haruman" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://demo.bcompnetsolutions.com/" />
    <meta property="og:title" content="bcompnetsolutions Best Solutions for your website" />
    <meta property="og:description" content="Bcompnet merupakan jasa jasa" />
    <meta property="og:image" content="/images/icon/wcern2cczvex3oqhqzpf.webp" />

    <!-- X (Twitter) -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="http://demo.bcompnetsolutions.com/" />
    <meta property="twitter:title" content="bcompnetsolutions Best Solutions for your website" />
    <meta property="twitter:description" content="Bcompnet merupakan jasa jasa" />
    {{-- <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" /> --}}





    @vite(['resources/css/prelineui.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScriptConfig
</head>

<body
    class="antialiased font-sans text-gray-800 bg-gray-100 w-full flex flex-col min-h-screen items-center justify-center">

    {{ $slot }}
    @livewireScripts
    @livewireScriptConfig

</body>

</html>
