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
    <body class="min-h-full bg-white text-brownie flex flex-col antialiased overflow-x-hidden">
        
        <!-- Header Component (Stretches Full Width) -->
        <x-public.header.header />

        <!-- Main Page Content (Stretches Full Width) -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer Component (Stretches Full Width) -->
        <x-public.footer.footer />

        <!-- Sticky Circular Floating WhatsApp Button -->
        @if(setting('whatsapp_number'))
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', setting('whatsapp_number', '+91 88005-93141')) }}?text=Hello%20NDS%20Security%20Team%2C%20I%20would%20like%20to%20inquire%20about%20your%20services."
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Chat on WhatsApp"
               class="fixed bottom-6 right-6 z-50 group w-14 h-14 bg-gradient-to-tr from-emerald-600 via-emerald-500 to-teal-500 text-white rounded-full shadow-2xl shadow-emerald-900/40 hover:shadow-emerald-500/60 hover:scale-110 active:scale-95 transition-all duration-300 flex items-center justify-center select-none">
                
                <!-- Pulse animation ring -->
                <span class="absolute -inset-1 bg-emerald-500/40 rounded-full blur-xs animate-ping pointer-events-none opacity-75"></span>

                <!-- WhatsApp Icon -->
                <i class="ri-whatsapp-fill text-3xl relative z-10 text-white group-hover:rotate-12 transition-transform duration-300"></i>

                <!-- Floating Tooltip badge on hover -->
                <span class="absolute right-16 px-3 py-1.5 bg-brownie text-white text-[11px] font-bold rounded-xl shadow-lg whitespace-nowrap opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none">
                    Chat on WhatsApp
                </span>
            </a>
        @endif

        @livewireScripts
    </body>
</html>
