<div>
    @if(count($products) > 0)
    <div class="bg-gray-50 rounded-lg p-6 shadow-sm mb-8">
        <h3 class="text-lg font-semibold text-gray-800 mb-5 flex items-center border-b border-gray-200 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Recently Viewed Products
        </h3>
        
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach($products as $product)
            <div class="group relative">
                <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity z-10">
                    <button class="bg-white rounded-full p-1.5 shadow-md hover:bg-blue-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
                <a wire:navigate href="/product/{{ $product->id }}/details" class="block bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="relative h-32 overflow-hidden">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <!-- Badge for new products -->
                        @if(isset($product->created_at) && $product->created_at->diffInDays(now()) < 7)
                        <div class="absolute top-2 left-2 bg-green-500 text-white text-xs font-bold px-1.5 py-0.5 rounded">NEW</div>
                        @endif
                    </div>
                    <div class="p-3">
                        <h4 class="font-medium text-gray-800 line-clamp-1 group-hover:text-blue-600 transition-colors">{{ $product->name }}</h4>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-blue-600 font-bold">${{ number_format($product->price, 2) }}</p>
                            <div class="text-xs text-gray-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                4.0
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
