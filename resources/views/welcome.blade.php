<x-layouts.app title="Welcome to ShopWave">
    <livewire:hero-section />

    <!-- Featured Categories Section -->
    <div class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <span class="text-blue-600 font-medium text-sm uppercase tracking-wider">Shop by Category</span>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">Explore Our Collections</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto my-4"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
                <a href="/all/products?category=1" class="group">
                    <div class="relative overflow-hidden rounded-xl aspect-square">
                        <img src="https://images.unsplash.com/photo-1526406915894-7bcd65f60845?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                            alt="Electronics"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="font-bold text-xl mb-1">Electronics</h3>
                            <span class="text-sm text-gray-200 group-hover:text-white transition-colors">Shop Now
                                →</span>
                        </div>
                    </div>
                </a>
                <a href="/all/products?category=2" class="group">
                    <div class="relative overflow-hidden rounded-xl aspect-square">
                        <img src="https://images.unsplash.com/photo-1582142306909-195724d33ffc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                            alt="Fashion"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="font-bold text-xl mb-1">Fashion</h3>
                            <span class="text-sm text-gray-200 group-hover:text-white transition-colors">Shop Now
                                →</span>
                        </div>
                    </div>
                </a>
                <a href="/all/products?category=3" class="group">
                    <div class="relative overflow-hidden rounded-xl aspect-square">
                        <img src="https://images.unsplash.com/photo-1567016376408-0226e4d0c1ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                            alt="Home & Garden"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="font-bold text-xl mb-1">Home & Garden</h3>
                            <span class="text-sm text-gray-200 group-hover:text-white transition-colors">Shop Now
                                →</span>
                        </div>
                    </div>
                </a>
                <a href="/all/products" class="group">
                    <div class="relative overflow-hidden rounded-xl aspect-square">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                            alt="All Products"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="font-bold text-xl mb-1">All Products</h3>
                            <span class="text-sm text-gray-200 group-hover:text-white transition-colors">Shop Now
                                →</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Product Section - Simplified -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <livewire:product-section />
        </div>
    </div>

    <!-- Special Offer Banner -->
    <div class="bg-blue-600 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="text-white mb-6 md:mb-0">
                    <h2 class="text-3xl font-bold">Special Discount for New Customers</h2>
                    <p class="text-blue-100 mt-2">Use code WELCOME10 for 10% off your first purchase</p>
                </div>
                <a href="/all/products"
                    class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-700 font-medium rounded-lg hover:bg-blue-50 transition duration-150 ease-in-out shadow-md">
                    Shop Now
                </a>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="bg-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-medium text-sm uppercase tracking-wider">Why Choose Us</span>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">The ShopWave Experience</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto my-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-gray-50 p-8 rounded-lg shadow-sm flex flex-col items-center text-center transition-transform hover:-translate-y-1">
                    <div class="bg-blue-600 rounded-full p-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Free Shipping</h3>
                    <p class="text-gray-600">Enjoy free shipping on all orders over $50. Fast delivery straight to your
                        doorstep.</p>
                </div>

                <div
                    class="bg-gray-50 p-8 rounded-lg shadow-sm flex flex-col items-center text-center transition-transform hover:-translate-y-1">
                    <div class="bg-blue-600 rounded-full p-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Our customer support team is available round-the-clock to assist you with
                        any questions.</p>
                </div>

                <div
                    class="bg-gray-50 p-8 rounded-lg shadow-sm flex flex-col items-center text-center transition-transform hover:-translate-y-1">
                    <div class="bg-blue-600 rounded-full p-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Secure Payments</h3>
                    <p class="text-gray-600">Shop with confidence using our 100% secure payment processing methods.</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
