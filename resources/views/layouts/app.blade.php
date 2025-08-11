<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div x-data="{ open: window.innerWidth < 1024 ? true : false }" x-init="() => {
        window.addEventListener('resize', () => {
            open = window.innerWidth < 1024 ? true : false;
        });
    }" class="min-h-screen bg-gray-100">
        @include('layouts.sidebar')

        <!-- Page Content -->
        <main class="transition-all ease-in-out bg-[#e0e1dd]" :class="{ 'ml-0': open, 'lg:ml-72': !open }">
            @include('layouts.nav')

            {{ $slot }}
        </main>
    </div>
</body>

</html>
