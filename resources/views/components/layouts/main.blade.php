@props([
    'title' => '',
    'siteName' => config('app.name'),
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seoTitle ?? 'Default Title' }}</title>
    <meta name="description" content="{{ $seoDescription ?? 'Default description' }}">
    <meta name="keywords" content="{{ $seoKeywords ?? '' }}">

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
    @vite(['resources/css/blog.css', 'resources/css/prelineui.css', 'resources/js/app.js'])
    @livewireScriptConfig
    @livewireStyles
</head>

<body class="antialiased font-sans text-gray-800 bg-gray-100 w-full flex flex-col min-h-screen">
    <div class="w-full top-0 bg-white dark:bg-gray-900 min-h-screen">
        <livewire:components.navbar />

        <main>
            {!! $slot ?? '' !!}
            @livewireScripts
        </main>

        <div class="mt-16">

            <livewire:components.footer />
        </div>
    </div>
    <livewire:components.float-button />

</body>

</html>
