<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-cream/20">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? setting('company_name', 'NDS Security Services') }}</title>
        <link rel="icon" href="{{ setting('favicon') ? asset('storage/' . setting('favicon')) : asset('favicon.ico') }}">

        <!-- Google Fonts: Instrument Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="min-h-full bg-white text-brownie flex flex-col antialiased">
        
        <!-- Header Component (Stretches Full Width) -->
        <x-public.header.header />

        <!-- Main Page Content (Stretches Full Width) -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer Component (Stretches Full Width) -->
        <x-public.footer.footer />

        @livewireScripts
    </body>
</html>
