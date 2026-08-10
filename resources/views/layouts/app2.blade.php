<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-cream/20">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'NDS Security Services - Home 2' }}</title>

        <!-- Google Fonts: Instrument Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="min-h-full bg-white text-brownie flex flex-col antialiased">
        
        <!-- Main Page Content (Hero Video + Floating Header 2 + All Sections) -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer Component -->
        <x-public.footer.footer />

        @livewireScripts
    </body>
</html>
