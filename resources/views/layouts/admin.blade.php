<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#FAF9F5]">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'NDS Admin Portal' }}</title>

        <!-- Google Fonts: Instrument Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

        <!-- TinyMCE Rich Text Editor -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" referrerpolicy="no-referrer"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="min-h-full bg-[#FAF9F5] text-brownie antialiased font-sans">
        
        <!-- Main Layout Container with Alpine.js state for responsive mobile sidebar -->
        <div x-data="{ sidebarOpen: false }" class="flex min-h-screen relative">
            
            <!-- Sidebar Component -->
            <livewire:admin.sidebar />

            <!-- Content Area Wrapper -->
            <div class="flex-grow flex flex-col min-w-0 min-h-screen">
                <!-- Header Component -->
                <livewire:admin.header />

                <!-- Main Content Slot -->
                <main class="flex-grow p-4 md:p-6 lg:p-8 max-w-7xl w-full mx-auto">
                    {{ $slot }}
                </main>
            </div>
            
            <!-- Mobile Sidebar Overlay Backdrop -->
            <div 
                x-show="sidebarOpen" 
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="sidebarOpen = false" 
                class="fixed inset-0 bg-[#3E1B11]/40 backdrop-blur-xs z-40 md:hidden"
                x-cloak>
            </div>
        </div>
        @include('components.toast')

        @livewireScripts
    </body>
</html>
