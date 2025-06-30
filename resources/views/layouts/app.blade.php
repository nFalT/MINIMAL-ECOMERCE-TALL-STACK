<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8y+6b6f6b6f6b6f6b6f6b6f6b6f6b6f6b6" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="antialiased">
    <div id="app">
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a href="{{ route('home') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>
                                <a href="{{ route('products.index') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Products</a>
                                <a href="{{ route('about') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
                                <a href="{{ route('contact') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Log in</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                            @endif
                        @else
                            <span class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @endguest

                        <!-- Cart Icon -->
                        <a href="{{ route('cart.index') }}" class="relative">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-count absolute -top-2 -right-2 bg-red-500 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">
                                {{ count((array) session('cart')) }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>