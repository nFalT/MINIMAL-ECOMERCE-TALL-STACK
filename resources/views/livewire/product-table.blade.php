<div class="space-y-6">
    <!-- Breadcrumb -->
    <livewire:break-crumb :url="$currentUrl" />

    <!-- Card Container -->
    <div class="bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-2xl shadow p-6">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Products</h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">Manage and view all products</p>
            </div>
            <div class="mt-4 md:mt-0 flex items-center space-x-2">
                <input type="search" wire:model.live.debounce.300="search"
                    class="w-full md:w-64 py-2 px-3 bg-gray-100 dark:bg-neutral-700 border border-transparent rounded-lg text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Search products..." />
                <a wire:navigate href="/add/product"
                    class="flex items-center gap-x-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Product
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-700">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-neutral-300">Name
                        </th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-neutral-300">
                            Description</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-neutral-300">Price
                        </th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-neutral-300">Category
                        </th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-neutral-300">Created
                            At</th>
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-neutral-800 divide-y divide-gray-200 dark:divide-neutral-700">
                    @forelse ($products as $product)
                        <tr wire:key="{{ $product->id }}">
                            <td class="px-4 py-3 flex items-center space-x-3">
                                <img src="{{ Storage::url($product->image) }}" alt=""
                                    class="h-10 w-10 rounded-full object-cover" />
                                <span
                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{ Str::limit($product->name, 30) }}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-600 dark:text-neutral-400">
                                {{ Str::limit($product->description, 50) }}</td>
                            <td class="px-4 py-3 text-sm font-medium text-gray-800 dark:text-neutral-200">Rp
                                {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td class="px-4 py-3">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-semibold bg-teal-100 text-teal-800 rounded-lg dark:bg-teal-500/10 dark:text-teal-500">{{ $product->category->name }}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 dark:text-neutral-500">
                                {{ $product->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-4 py-3 text-right">
                                <a wire:navigate href="/edit/{{ $product->id }}/product"
                                    class="text-blue-600 hover:underline dark:text-blue-400">Edit</a>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <button wire:click="delete({{ $product->id }})"
                                    wire:confirm.prompt="Type DELETE to confirm|DELETE"
                                    class="text-red-600 hover:underline dark:text-red-400">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7"
                                class="px-4 py-6 text-center text-sm text-gray-500 dark:text-neutral-400">
                                No products found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination & Per Page -->
        <div class="mt-6 flex flex-col md:flex-row md:justify-between items-center">
            <div class="mb-4 md:mb-0 flex items-center space-x-2">
                <label for="perPage" class="text-sm text-gray-700 dark:text-neutral-300">Per Page:</label>
                <select id="perPage" wire:model.live="perPage"
                    class="py-1 px-2 bg-gray-50 dark:bg-neutral-700 border border-gray-300 dark:border-neutral-600 rounded-lg text-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
