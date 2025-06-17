<!-- Edit Product Details Form -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="bg-white dark:bg-neutral-900 shadow rounded-xl p-6 sm:p-8 border border-gray-200 dark:border-neutral-800">
        <form wire:submit="update" class="space-y-10">

            <!-- Title -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Edit Product Details</h2>
            </div>

            <!-- Product Name -->
            <div class="grid sm:grid-cols-3 gap-4 items-start">
                <label for="product_name" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mt-2">Product Name</label>
                <div class="sm:col-span-2">
                    <input type="text" wire:model="product_name" id="product_name"
                        class="block w-full text-sm px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200"
                    >
                    @error('product_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Product Price -->
            <div class="grid sm:grid-cols-3 gap-4 items-start">
                <label for="product_price" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mt-2">Price</label>
                <div class="sm:col-span-2">
                    <input type="text" wire:model="product_price" id="product_price" inputmode="decimal" pattern="[0-9]*[.,]?[0-9]*"
                        class="block w-full text-sm px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200"
                    >
                    @error('product_price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Category -->
            <div class="grid sm:grid-cols-3 gap-4 items-start">
                <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mt-2">Category</label>
                <div class="sm:col-span-2">
                    <select wire:model="category_id" id="category_id"
                        class="block w-full text-sm px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200"
                    >
                        <option value="">Select Product Category</option>
                        @foreach ($all_categories as $category)
                            <option value="{{ $category->id }}" wire:key="{{ $category->id }}" {{ $product_details->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Image Preview -->
            <div class="grid sm:grid-cols-3 gap-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mt-2">Product Image</label>
                <div class="sm:col-span-2 space-y-4">
                    @if ($photo && is_string($photo))
                        <img src="{{ Storage::url($photo) }}" alt="Product image" class="w-64 h-64 object-cover rounded-lg">
                    @elseif ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" alt="Product image" class="w-64 h-64 object-cover rounded-lg">
                    @else
                        <img src="{{ asset('default-image.jpg') }}" alt="Default image" class="w-64 h-64 object-cover rounded-lg">
                    @endif
                </div>
            </div>

            <!-- Upload Image -->
            <div class="grid sm:grid-cols-3 gap-4 items-start">
                <label for="file" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mt-2">Upload New Image</label>
                <div class="sm:col-span-2 space-y-2" x-data="{ uploading: false, progress: 0 }"
                     x-on:livewire-upload-start="uploading = true"
                     x-on:livewire-upload-finish="uploading = false"
                     x-on:livewire-upload-error="uploading = false"
                     x-on:livewire-upload-progress="progress = $event.detail.progress"
                >
                    <input type="file" wire:model="photo" id="file" accept="image/png, image/jpeg"
                        class="block w-full text-sm border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200 p-2.5"
                    >
                    @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <div x-show="uploading" class="w-full mt-2">
                        <div class="h-2 bg-gray-200 dark:bg-neutral-700 rounded-full overflow-hidden">
                            <div class="bg-blue-600 dark:bg-blue-500 h-2 transition-all duration-300" :style="`width: ${progress}%`"></div>
                        </div>
                        <div class="text-right text-xs text-gray-500 dark:text-gray-400 mt-1" x-text="`${progress}%`"></div>
                    </div>
                </div>
            </div>

            <!-- Product Description -->
            <div class="grid sm:grid-cols-3 gap-4 items-start">
                <label for="product_description" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mt-2">Product Description</label>
                <div class="sm:col-span-2">
                    <textarea wire:model="product_description" id="product_description" rows="6"
                        class="block w-full text-sm px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:text-neutral-200"
                        placeholder="Add a product description here!"></textarea>
                    @error('product_description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all duration-200 disabled:opacity-50"
                    wire:loading.attr="disabled">
                    <div wire:loading class="animate-spin w-4 h-4 border-2 border-white border-t-transparent rounded-full" role="status"></div>
                    <span wire:loading.remove>Submit and Save</span>
                    <span wire:loading>Saving...</span>
                </button>
            </div>
        </form>
    </div>
</div>
