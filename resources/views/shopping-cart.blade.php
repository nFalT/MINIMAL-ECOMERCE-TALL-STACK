<x-layouts.app title="Shopping Cart">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Shopping Cart</h1>
        
        <div class="bg-white shadow-sm rounded-lg p-6">
            @if(session()->has('cart') && count(session('cart')) > 0)
                <!-- Cart items will go here -->
                <p>You have {{ count(session('cart')) }} items in your cart.</p>
            @else
                <div class="text-center py-12">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-medium mb-4">Your cart is empty</h2>
                    <p class="text-gray-500 mb-6">Looks like you haven't added any products to your cart yet.</p>
                    <a href="/all/products" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                        Start Shopping
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-layouts.app>
