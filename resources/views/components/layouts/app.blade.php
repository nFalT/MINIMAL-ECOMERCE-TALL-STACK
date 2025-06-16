<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Shop the best products with ShopWave - your premium online shopping destination">

        <title>{{ config('app.name') }} - {{ $title ?? 'Online Shopping' }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <style>
            html {
                scroll-behavior: smooth;
            }
            body {
                font-family: 'Inter', sans-serif;
            }
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            
            /* Add fade-in animation for page transitions */
            body > * {
                animation: fadeInPage 0.3s ease-in-out;
            }
            
            @keyframes fadeInPage {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            /* Add some custom animation classes */
            .hover-lift {
                transition: transform 0.3s ease;
            }
            .hover-lift:hover {
                transform: translateY(-5px);
            }
            
            /* Improve form elements */
            input, textarea, select {
                transition: all 0.3s ease;
            }
        </style>
    </head>
    <body class="bg-gray-50 min-h-screen flex flex-col antialiased text-gray-800">
        <livewire:header />
        
        <main class="flex-grow animate-fade-in">
            {{ $slot }}
        </main>
        
        <!-- Back to top button -->
        <button id="backToTop" class="fixed bottom-5 right-5 bg-blue-600 text-white rounded-full p-2 hidden shadow-lg hover:bg-blue-700 transition-all duration-300 z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>
        
        <livewire:footer />
        
        <script>
            // Back to top button
            document.addEventListener('DOMContentLoaded', function() {
                const backToTopButton = document.getElementById('backToTop');
                
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        backToTopButton.classList.remove('hidden');
                        backToTopButton.classList.add('flex');
                    } else {
                        backToTopButton.classList.add('hidden');
                        backToTopButton.classList.remove('flex');
                    }
                });
                
                backToTopButton.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </body>
</html>
