<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100 dark:bg-neutral-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title data-lang-key="title">Bcomptech Solutions Sign In</title>

    @vite(['resources/css/prelineui.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="h-full">
    {{ $slot }}
    @livewireScripts
</body>
<livewire:components.float-button />

</html>
