<div>
    <livewire:break-crumb :url="$currentUrl" />
    
    <!-- Card Section -->
    <div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden dark:bg-neutral-900 dark:border-neutral-800">
            <!-- Header -->
            <div class="bg-gradient-to-r from-purple-50 to-indigo-50 px-8 py-10 border-b border-gray-100 text-center dark:from-neutral-800 dark:to-neutral-700 dark:border-neutral-700">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Update Category</h1>
                <p class="text-gray-600 dark:text-neutral-400">Update category to organize your products</p>
            </div>

            <div class="p-8">
                <form wire:submit="update" class="space-y-8">
                    <!-- Category Name Input -->
                    <div class="space-y-3">
                        <label for="category_name" class="block text-sm font-semibold text-gray-700 dark:text-neutral-300 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            Category Name
                            <span class="text-red-500 ml-1">*</span>
                        </label>
                        
                        <div class="relative">
                            <input 
                                type="text" 
                                wire:model="category_name" 
                                id="category_name"
                                value="{{ old('category_name', $category_name) }}"
                                placeholder="Enter category name"
                                class="w-full px-4 py-4 text-lg border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200 placeholder-gray-400 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-purple-600 dark:focus:border-purple-600"
                            >
                            
                            <!-- Input Icon -->
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                </svg>
                            </div>
                        </div>
                        
                        @error('category_name')
                            <div class="flex items-center p-3 bg-red-50 border border-red-200 rounded-lg dark:bg-red-900/20 dark:border-red-800">
                                <svg class="w-5 h-5 text-red-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-red-700 text-sm font-medium dark:text-red-400">{{ $message }}</span>
                            </div>
                        @enderror
                        
                        <!-- Helper Text -->
                        <p class="text-sm text-gray-500 dark:text-neutral-400 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Choose a descriptive name that represents the type of products in this category
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200 dark:border-neutral-700">
                        <a 
                            href="/manage/categories"
                            class="flex-1 px-6 py-3 border-2 border-gray-300 rounded-xl text-sm font-semibold text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all duration-200 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:border-neutral-500"
                        >
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Cancel
                        </a>
                        
                        <button 
                            type="submit"
                            class="flex-1 cursor-pointer px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl text-sm font-semibold hover:from-purple-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 flex items-center justify-center space-x-2 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                        >
                            <div wire:loading class="animate-spin w-4 h-4 border-2 border-white border-t-transparent rounded-full" role="status" aria-label="loading"></div>
                            <span wire:loading.remove class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Update Category
                            </span>
                            <span wire:loading class="flex items-center">Updating...</span>
                        </button>
                    </div>

                    <!-- Additional Info -->
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 dark:bg-blue-900/20 dark:border-blue-800">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <h4 class="text-sm font-semibold text-blue-900 dark:text-blue-300">Good to know</h4>
                                <p class="text-sm text-blue-800 dark:text-blue-400 mt-1">
                                    Categories help organize your products and make them easier for customers to find. You can always edit or delete categories later.
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</div>