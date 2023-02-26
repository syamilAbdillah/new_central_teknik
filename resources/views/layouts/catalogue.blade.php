<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-neutral-700">
        <div class="min-h-screen bg-neutral-50">

            <div class="w-full rainfall bg-rose-500">
                <nav class="flex items-center justify-between px-4 py-8 w-full max-w-screen-lg mx-auto">
                    <x-laravel-logo></x-laravel-logo>
                    <a href="/" class="text-2xl font-black text-white">Laravel Merch</a>
                    <button class="btn border border-white text-white">chart</button>
                </nav>
            </div>
            <main class="p-4 w-full max-w-screen-lg mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
