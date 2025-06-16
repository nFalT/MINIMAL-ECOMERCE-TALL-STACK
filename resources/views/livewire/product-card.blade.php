<div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 flex flex-col h-full group">
    <a wire:navigate href="/product/{{ $product->id }}/details" class="block relative h-48 overflow-hidden">
        <!-- Product Badge (Sale, New, etc) -->
        @if(isset($product->discount) && $product->discount > 0)
            <div class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-md flex items-center z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                {{ $product->discount }}% OFF
            </div>
        @endif
        
        <!-- New Product Badge -->
        @if(isset($product->created_at) && $product->created_at->diffInDays(now()) < 7)
            <div class="absolute top-2 left-20 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-md flex items-center z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 10-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                </svg>
                NEW
            </div>
        @endif
        
        <!-- Quick Action Buttons -->
        <div class="absolute top-2 right-2 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 transition-all duration-300 z-20">
            <button class="bg-white bg-opacity-90 rounded-full p-2 hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-md" title="Quick View">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </button>
            <button class="bg-white bg-opacity-90 rounded-full p-2 hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-md" title="Add to Wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
            <button class="bg-white bg-opacity-90 rounded-full p-2 hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-md" title="Compare">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                </svg>
            </button>
        </div>
        
        <!-- Product Image with Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" 
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        
        <!-- View Details Badge -->
        <div class="absolute bottom-0 left-0 right-0 bg-blue-600 text-white text-center py-2 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
            <span class="inline-flex items-center justify-center text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
                View Details
            </span>
        </div>
    </a>
    
    <!-- Product Details -->
    <div class="p-4 flex flex-col flex-grow">
        <!-- Product Category -->
        <div class="text-xs text-gray-500 mb-1 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            {{ $product->category->name ?? 'Uncategorized' }}
        </div>
        
        <!-- Product Name -->
        <h3 class="font-semibold text-gray-800 text-lg mb-1 line-clamp-1 group-hover:text-blue-600 transition-colors">{{ $product->name }}</h3>
        
        <!-- Product Rating -->
        <div class="flex items-center mb-2">
            <div class="flex text-yellow-400">
                @for($i = 0; $i < 5; $i++)
                    @if($i < 4)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endif
                @endfor
            </div>
            <span class="text-xs text-gray-500 ml-1">({{ rand(10, 50) }})</span>
        </div>
        
        <!-- Product Features -->
        <div class="flex flex-wrap text-xs text-gray-500 mb-3 gap-2">
            @if(isset($product->is_featured) && $product->is_featured)
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8-2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Featured
                </span>
            @endif
            @if(isset($product->free_shipping) && $product->free_shipping)
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7h4a1 1 0 011 1v6h-2.05a2.5 2.5 0 00-4.9 0H12V8a1 1 0 011-1z" />
                    </svg>
                    Free Shipping
                </span>
            @endif
            @if(isset($product->in_stock) && $product->in_stock)
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    In Stock
                </span>
            @endif
        </div>
        
        <!-- Product Description -->
        <p class="text-gray-500 text-sm mb-4 line-clamp-2">{{ $product->description }}</p>
        
        <!-- Product Price and Add To Cart -->
        <div class="mt-auto flex items-center justify-between">
            <div>
                <span class="text-blue-600 font-bold">${{ number_format($product->price, 2) }}</span>
                @if(isset($product->old_price) && $product->old_price)
                    <span class="text-gray-400 text-sm line-through ml-2">${{ number_format($product->old_price, 2) }}</span>
                @endif
            </div>
            <button wire:click="addToCart({{ $product->id }})" class="text-white bg-blue-600 hover:bg-blue-700 rounded-full p-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all duration-300 hover:scale-110 shadow-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </button>
        </div>
    </div>
</div>
