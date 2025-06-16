<div class="container mx-auto px-4">
    @if (session()->has('success'))
        <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
            {{ session('error') }}
        </div>
    @endif

    @if ($hasProducts)
        <!-- Featured Products Section -->
        <div class="mb-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($featuredProducts as $product)
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                        <a wire:navigate href="/product/{{ $product->id }}/details"
                            class="block relative h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                            @if (isset($product->discount) && $product->discount > 0)
                                <div
                                    class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-md">
                                    {{ $product->discount }}% OFF
                                </div>
                            @endif
                        </a>
                        <div class="p-4 flex flex-col flex-grow">
                            <div class="flex-grow">
                                <h3 class="font-medium text-gray-800 text-lg mb-2 line-clamp-2">{{ $product->name }}
                                </h3>
                                <p class="text-gray-500 text-sm mb-4 line-clamp-2">{{ $product->description }}</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <div>
                                    <span
                                        class="text-blue-600 font-bold">${{ number_format($product->price, 2) }}</span>
                                    @if (isset($product->old_price) && $product->old_price)
                                        <span
                                            class="text-gray-400 text-sm line-through ml-2">${{ number_format($product->old_price, 2) }}</span>
                                    @endif
                                </div>
                                <button wire:click="addToCart({{ $product->id }})"
                                    class="text-white bg-blue-600 cursor-pointer hover:bg-blue-700 rounded-full p-1.5 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Category Products Sections -->
        @foreach ($categories as $category)
            <div class="mb-12">
                <div class="flex justify-between items-center mb-6 pb-2 border-b">
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        {{ $category->name }}
                    </h2>
                    <a wire:navigate href="/all/products?category={{ $category->id }}"
                        class="text-blue-600 hover:text-blue-700 text-sm font-medium flex items-center group">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 inline-block ml-1 transition-transform duration-200 group-hover:translate-x-1"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <livewire:product-listing :category_id="$category->id" :key="'category-' . $category->id" />
            </div>
        @endforeach
    @else
        <!-- Empty State - Display simple message instead -->
        <div class="bg-white shadow-sm rounded-lg overflow-hidden">
            <div class="p-8 md:p-12 text-center">
                <div class="flex justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">No products available</h2>
                <p class="text-gray-600 max-w-lg mx-auto mb-8">
                    Please check back later.
                </p>
                <a href="/all/products"
                    class="inline-flex items-center justify-center px-5 py-2.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                    Browse Categories
                </a>
            </div>
        </div>
    @endif
</div>
