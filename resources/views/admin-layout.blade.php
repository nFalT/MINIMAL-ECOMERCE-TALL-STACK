<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Dashboard' }} - ShopWave Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 dark:bg-neutral-900 dark:text-neutral-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="hidden lg:flex lg:flex-shrink-0">
            <div
                class="flex flex-col w-64 bg-white dark:bg-neutral-800 border-r border-gray-200 dark:border-neutral-700">
                <div class="flex items-center h-16 px-6 bg-blue-600">
                    <a href="/" class="flex items-center space-x-2 text-white">
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 24"
                            stroke="currentColor">
                            <path
                                d="M0.41 10.38C1.15 7.42 2.85 4.79 5.26 2.90C7.67 1.02 10.64 0 13.70 0C16.75 0 19.72 1.02 22.13 2.90C24.53 4.79 26.24 7.42 26.98 10.38H0.41Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-xl font-semibold">ShopWave</span>
                    </a>
                </div>
                <nav class="flex-1 overflow-y-auto px-4 py-6">
                    <ul class="space-y-4">
                        <li>
                            <a href="/admin/dashboard"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 {{ Request::is('admin/dashboard') ? 'bg-blue-50 dark:bg-blue-900' : '' }}">
                                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="/products"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 {{ Request::is('products') ? 'bg-blue-50 dark:bg-blue-900' : '' }}">
                                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="/orders"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 {{ Request::is('orders') ? 'bg-blue-50 dark:bg-blue-900' : '' }}">
                                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <circle cx="12" cy="14" r="2" />
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="/manage/categories"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 {{ Request::is('manage/categories') ? 'bg-blue-50 dark:bg-blue-900' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20.59 13.41L12 4.83a2 2 0 0 0-2.83 0L3.41 10.59a2 2 0 0 0 0 2.83l8.59 8.59a2 2 0 0 0 2.83 0l6.76-6.76a2 2 0 0 0 0-2.83z" />
                                    <circle cx="12" cy="12" r="2" />
                                </svg>
                                Categories
                            </a>

                        </li>
                    </ul>
                </nav>
                <div class="p-4 border-t border-gray-200 dark:border-neutral-700">
                    <div class="flex items-center space-x-3">
                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M16 7a4 4 0 1 0-8 0 4 4 0 0 0 8 0z" />
                                <path d="M12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">{{ auth()->user()->name }}</p>
                            <p class="text-sm text-gray-500 dark:text-neutral-400">Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Mobile Header -->
            <header
                class="lg:hidden flex items-center justify-between bg-white dark:bg-neutral-800 px-4 py-3 border-b border-gray-200 dark:border-neutral-700">
                <button data-hs-overlay="#hs-application-sidebar"
                    class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-neutral-700">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h1 class="text-lg font-semibold">{{ $title ?? 'Dashboard' }}</h1>
                <div></div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Alpine.js for sidebar toggle -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
