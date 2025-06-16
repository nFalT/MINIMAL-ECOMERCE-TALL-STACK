<div>
    <header class="bg-white sticky top-0 z-50 transition-all duration-300" x-data="{ isScrolled: false, isMenuOpen: @entangle('isMenuOpen') }" x-init="window.addEventListener('scroll', () => { isScrolled = window.pageYOffset > 10 })"
        :class="{ 'shadow-lg': isScrolled }">
        <!-- Top Navigation Bar -->
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a wire:navigate href="/"
                    class="flex items-center transition-transform duration-300 hover:scale-105">
                    <svg class="h-8 mr-2 text-blue-600" viewBox="0 0 28 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                            fill="currentColor" />
                    </svg>
                    <span
                        class="font-bold text-xl bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">ShopWave</span>
                </a>
            </div>

            <!-- Search Bar (Medium screens and up) -->
            <div class="hidden md:block flex-grow max-w-md mx-6">
                <form class="relative">
                    <input type="text" placeholder="Search products..."
                        class="w-full py-2.5 pl-10 pr-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button type="submit"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-blue-600 hover:text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Right Navigation -->
            <div class="flex items-center space-x-5">
                <a wire:navigate href="/about"
                    class="hidden md:flex items-center text-gray-700 hover:text-blue-600 font-medium transition duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-1.5 transition-transform group-hover:scale-110" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>About</span>
                </a>
                <a wire:navigate href="/contacts"
                    class="hidden md:flex items-center text-gray-700 hover:text-blue-600 font-medium transition duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-1.5 transition-transform group-hover:scale-110" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Contact</span>
                </a>
                <a wire:navigate href="/all/products"
                    class="hidden md:flex items-center text-gray-700 hover:text-blue-600 font-medium transition duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-1.5 transition-transform group-hover:scale-110" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span>Shop</span>
                </a>

                <!-- Shopping Cart Icon -->
                <div class="relative">
                    <livewire:cart-icon />
                    <span
                        class="absolute -bottom-1 -right-1 h-2 w-2 bg-blue-600 rounded-full animate-ping opacity-75"></span>
                </div>

                <!-- Authentication Links -->
                @auth
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex items-center text-gray-700 hover:text-blue-600 focus:outline-none transition duration-300 group">
                            <div
                                class="relative h-9 w-9 rounded-full border-2 border-transparent group-hover:border-blue-500 overflow-hidden transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-full w-full p-1.5 text-blue-600 bg-blue-100" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span class="hidden md:inline-block ml-2 font-medium">{{ auth()->user()->name }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300"
                                :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Enhanced Dropdown Menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" @click.away="open = false"
                            class="absolute right-0 mt-3 w-64 bg-white rounded-lg shadow-xl py-2 z-50 border border-gray-100">
                            <!-- User Info Section -->
                            <div class="px-4 py-3 border-b border-gray-100">
                                <div class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 text-white flex items-center justify-center text-lg font-bold">
                                        {{ substr(auth()->user()->name, 0, 1) }}
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                                        <div class="mt-1.5">
                                            <span
                                                class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                                @if (auth()->user()->isAdmin())
                                                    Administrator
                                                @else
                                                    Customer
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Items -->
                            @if (auth()->user()->isAdmin())
                                <a href="/admin/dashboard"
                                    class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 group">
                                    <div class="bg-blue-100 p-1.5 rounded mr-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium">Admin Dashboard</p>
                                        <p class="text-xs text-gray-500">Manage your store</p>
                                    </div>
                                </a>
                            @endif

                            <a href="/profile"
                                class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 group">
                                <div class="bg-blue-100 p-1.5 rounded mr-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">My Profile</p>
                                    <p class="text-xs text-gray-500">View and update your profile</p>
                                </div>
                            </a>

                            <a href="{{ route('shopping-cart') }}"
                                class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 group">
                                <div class="bg-blue-100 p-1.5 rounded mr-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">My Cart</p>
                                    <p class="text-xs text-gray-500">View your shopping cart</p>
                                </div>
                            </a>

                            <a href="#"
                                class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 group">
                                <div class="bg-blue-100 p-1.5 rounded mr-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">My Orders</p>
                                    <p class="text-xs text-gray-500">Track and manage orders</p>
                                </div>
                            </a>

                            <hr class="my-2 border-gray-100">

                            <a href="/auth/logout"
                                class="flex items-center px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 group">
                                <div class="bg-red-100 p-1.5 rounded mr-3 text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                                <p class="font-medium">Logout</p>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="hidden md:flex items-center space-x-3">
                        <a href="/auth/login"
                            class="flex items-center px-4 py-2 text-blue-600 hover:text-blue-700 font-medium transition-all duration-300 hover:scale-105 border border-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Login
                        </a>
                        <a href="/auth/register"
                            class="flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all duration-300 hover:scale-105 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            Register
                        </a>
                    </div>
                @endauth

                <!-- Mobile Menu Toggle - Enhanced Button -->
                <button @click="isMenuOpen = !isMenuOpen"
                    class="md:hidden p-2 text-gray-700 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded-md transition-transform duration-300 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!isMenuOpen" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="isMenuOpen" style="display: none"
                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Enhanced Mobile Menu -->
        <div class="md:hidden" x-show="isMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2">
            <div class="bg-white border-t border-b border-gray-200">
                <div class="px-4 py-3">
                    @auth
                        <!-- Mobile User Info -->
                        <div class="flex items-center py-3 border-b border-gray-200 mb-3">
                            <div
                                class="h-14 w-14 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 text-white flex items-center justify-center text-lg font-bold">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                            <div class="ml-3">
                                <p class="font-medium text-gray-800">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                                <div class="mt-1">
                                    <span
                                        class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                        @if (auth()->user()->isAdmin())
                                            Administrator
                                        @else
                                            Customer
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endauth

                    <!-- Mobile Search -->
                    <form class="mb-4 relative">
                        <input type="text" placeholder="Search products..."
                            class="w-full py-2.5 pl-10 pr-10 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <button type="submit"
                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </form>

                    <!-- Mobile Navigation -->
                    <nav class="flex flex-col space-y-1">
                        <a wire:navigate href="/about"
                            class="flex items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium rounded-lg transition duration-300">
                            <div class="bg-blue-100 p-2 rounded mr-3 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span>About Us</span>
                        </a>
                        <a wire:navigate href="/contacts"
                            class="flex items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium rounded-lg transition duration-300">
                            <div class="bg-blue-100 p-2 rounded mr-3 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span>Contact Us</span>
                        </a>
                        <a wire:navigate href="/all/products"
                            class="flex items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium rounded-lg transition duration-300">
                            <div class="bg-blue-100 p-2 rounded mr-3 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <span>Shop All Products</span>
                        </a>
                        <a wire:navigate href="{{ route('shopping-cart') }}"
                            class="flex items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium rounded-lg transition duration-300">
                            <div class="bg-blue-100 p-2 rounded mr-3 text-blue-600 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                @if ($cartCount > 0)
                                    <span
                                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-4 h-4 flex items-center justify-center rounded-full">{{ $cartCount }}</span>
                                @endif
                            </div>
                            <span>My Cart</span>
                        </a>

                        @auth
                            @if (auth()->user()->isAdmin())
                                <a href="/admin/dashboard"
                                    class="flex items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium rounded-lg transition duration-300">
                                    <div class="bg-blue-100 p-2 rounded mr-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </div>
                                    <span>Admin Dashboard</span>
                                </a>
                            @endif
                            <a href="/profile"
                                class="flex items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium rounded-lg transition duration-300">
                                <div class="bg-blue-100 p-2 rounded mr-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <span>My Profile</span>
                            </a>
                            <a href="/auth/logout"
                                class="flex items-center py-3 px-4 text-red-600 hover:bg-red-50 hover:text-red-700 font-medium rounded-lg transition duration-300">
                                <div class="bg-red-100 p-2 rounded mr-3 text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                                <span>Logout</span>
                            </a>
                        @else
                            <div class="mt-3 flex flex-col space-y-2">
                                <a href="/auth/login"
                                    class="flex items-center justify-center py-3 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                    Login to Your Account
                                </a>
                                <a href="/auth/register"
                                    class="flex items-center justify-center py-3 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-800 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                    </svg>
                                    Create New Account
                                </a>
                            </div>
                        @endauth
                    </nav>
                </div>
            </div>
        </div>

        <!-- Categories Navigation - Enhanced with Animation and Scroll Effects -->
        <div class="hidden md:block bg-gray-50 border-t border-b border-gray-200 transition-all duration-300"
            :class="{ 'shadow-sm': isScrolled }">
            <div class="container mx-auto px-4 overflow-hidden">
                <div class="flex space-x-1 py-3 overflow-x-auto whitespace-nowrap scrollbar-hide">
                    @foreach ($categories as $category)
                        <a wire:navigate href="/all/products?category={{ $category->id }}"
                            class="px-3 py-1.5 text-gray-700 hover:text-blue-600 font-medium flex items-center transition duration-300 hover:bg-blue-50 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-1.5 transition-transform duration-300 group-hover:scale-110"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            {{ $category->name }}
                        </a>
                    @endforeach
                    <a wire:navigate href="/all/products"
                        class="px-3 py-1.5 bg-blue-600 text-white font-medium flex items-center transition duration-300 hover:bg-blue-700 rounded-lg ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        All Categories
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
