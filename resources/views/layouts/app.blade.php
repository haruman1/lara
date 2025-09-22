<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Basic -->
    <title>{{ $seoTitle ?? 'Default Title' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $seoDescription ?? 'Default description' }}">
    <meta name="keywords" content="{{ $seoKeywords ?? '' }}">

    <link rel="icon" type="image/x-icon" href="/images/icon/favicon.ico" id="favicon_.ico">
    <link rel="icon" type="image/svg+xml" href="/images/icon/favicon.ico" id="favicon_.svg">
    <link rel="shortcut icon" href="/images/icon/favicon.ico" id="favicon_.ico">
    <link rel="apple-touch-icon" href="/images/icon/favicon.ico" id="favicon_apple">
    <!-- Open Graph -->
    <meta property="og:title" content="{{ $seoOgTitle ?? '' }}">
    <meta property="og:description" content="{{ $seoOgDescription ?? '' }}">
    <meta property="og:type" content="{{ $seoOgType ?? 'website' }}">
    <meta property="og:url" content="{{ $seoOgUrl ?? url()->current() }}">
    <meta property="og:image" content="{{ $seoOgImage ?? asset('default-og.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="{{ $seoTwitterCard ?? 'summary' }}">
    <meta name="twitter:title" content="{{ $seoTwitterTitle ?? '' }}">
    <meta name="twitter:description" content="{{ $seoTwitterDescription ?? '' }}">
    <meta name="twitter:image" content="{{ $seoTwitterImage ?? asset('default-twitter.png') }}">
    @vite(['resources/css/prelineui.css', 'resources/js/app.js'])

    @livewireStyles
    @livewireScriptConfig
</head>

<body class="antialiased font-sans text-gray-800 bg-gray-100 w-full flex flex-col min-h-screen">
    <div id="scrollspy"> {{ $slot }} @livewireScripts @livewireScriptConfig </div>
    <livewire:components.float-button />
</body>


</html>
