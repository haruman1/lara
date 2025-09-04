<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel JSON Translation</title>
    @vite(['resources/css/prelineui.css', 'resources/js/prelinejs.js'])
</head>

<body class="bg-gray-50 font-sans min-h-screen flex flex-col items-center justify-center">
    {{ $slot }}
    @livewireScripts
</body>

</html>
