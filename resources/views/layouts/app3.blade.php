<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'NDS Security Services - Premium Security Guard Solutions Noida' }}</title>

        <!-- Google Fonts: Instrument Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="min-h-full bg-white text-brownie flex flex-col antialiased">
        <!-- Floating Transparent/White Dynamic Header 3 Component -->
        <x-public.header3.header3 />
        
        <!-- Main Page Content starting at the top of the screen -->
        <main class="flex-grow w-full">
            {{ $slot }}
        </main>

        <!-- Footer Component -->
        <x-public.footer.footer />

        @livewireScripts
    </body>
</html>
