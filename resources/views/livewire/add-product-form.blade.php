<div>
    <livewire:break-crumb :url="$currentUrl" />
    
    <!-- Card Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden dark:bg-neutral-900 dark:border-neutral-800">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-8 border-b border-gray-100 dark:from-neutral-800 dark:to-neutral-700 dark:border-neutral-700">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Add New Product</h1>
                <p class="text-gray-600 dark:text-neutral-400 mt-2">Fill in the details below to create a new product</p>
            </div>

            <form wire:submit.prevent="save" class="p-6 sm:p-8">
                <!-- Basic Information Section -->
                <div class="mb-10">
                    <div class="flex items-center mb-6">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                            <span class="text-white text-sm font-semibold">1</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                            Basic Information
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Product Name -->
                        <div class="space-y-2">
                            <label for="product_name" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">
                                Product Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                wire:model="product_name" 
                                id="product_name"
                                placeholder="Enter product name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-blue-600"
                            >
                            @error('product_name')
                                <p class="text-red-500 text-sm mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div class="space-y-2">
                            <label for="product_price" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">
                                Price <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-3 top-3 text-gray-500 dark:text-neutral-400">$</span>
                                <input 
                                    id="product_price" 
                                    wire:model="product_price" 
                                    type="text"
                                    inputmode="decimal" 
                                    pattern="[0-9]*[.,]?[0-9]*"
                                    placeholder="0.00"
                                    class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-blue-600"
                                >
                            </div>
                            @error('product_price')
                                <p class="text-red-500 text-sm mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="space-y-2 lg:col-span-2">
                            <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">
                                Category <span class="text-red-500">*</span>
                            </label>
                            <select 
                                wire:model="category_id" 
                                id="category_id"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200 dark:focus:ring-blue-600"
                            >
                                <option value="">Select Product Category</option>
                                @foreach ($all_categories as $category)
                                    <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-500 text-sm mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="mb-10">
                    <div class="flex items-center mb-6">
                        <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center mr-3">
                            <span class="text-white text-sm font-semibold">2</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                            Product Details
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Product Image -->
                        <div class="space-y-2">
                            <label for="photo_upload" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">
                                Product Image <span class="text-red-500">*</span>
                            </label>

                            <input 
                                type="file" 
                                wire:model="photo" 
                                id="photo_upload" 
                                class="block w-full p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none dark:text-neutral-200 dark:bg-neutral-800 dark:border-neutral-600"
                                accept="image/png, image/jpeg"
                            >

                            @error('photo')
                                <p class="text-red-500 text-sm mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Product Description -->
                        <div class="space-y-4">
                            <label for="product_description" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">
                                Product Description
                            </label>
                            <div class="relative">
                                <textarea 
                                    id="product_description" 
                                    wire:model="product_description"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 resize-none dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-blue-600"
                                    rows="12" 
                                    placeholder="Describe your product in detail. Include key features, benefits, and specifications..."
                                    maxlength="1000"
                                ></textarea>
                                <div class="absolute bottom-3 right-3 text-xs text-gray-400 dark:text-neutral-500">
                                    <span>{{ strlen($product_description ?? '') }}</span>/1000
                                </div>
                            </div>
                            @error('product_description')
                                <p class="text-red-500 text-sm mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="border-t border-gray-200 pt-8 dark:border-neutral-700">
                    <div class="flex justify-end space-x-4">
                        <button 
                            type="button" 
                            class="px-6 py-3 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-300 dark:hover:bg-neutral-700"
                        >
                            Cancel
                        </button>
                        <button 
                            type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg text-sm font-medium hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 flex items-center space-x-2"
                            wire:loading.attr="disabled"
                        >
                            <div 
                                wire:loading
                                class="animate-spin w-4 h-4 border-2 border-white border-t-transparent rounded-full"
                                role="status" 
                                aria-label="loading"
                            >
                            </div>
                            <span wire:loading.remove>
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span wire:loading.remove>Save Product</span>
                            <span wire:loading>Saving...</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</div>