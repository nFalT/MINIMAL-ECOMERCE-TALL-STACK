<div class="space-y-6">
    <!-- Breadcrumb -->
    <livewire:break-crumb :url="$currentUrl" />

    @if (session()->has('message'))
        <div class="mb-4 p-4 rounded-lg bg-green-50 text-green-800 border border-green-200 dark:bg-green-900 dark:text-green-100 dark:border-green-700">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="mb-4 p-4 rounded-lg bg-red-50 text-red-800 border border-red-200 dark:bg-red-900 dark:text-red-100 dark:border-red-700">
            {{ session('error') }}
        </div>
    @endif

    <!-- Card Container -->
    <div class="bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-2xl shadow p-6">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Categories</h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">Add, edit, or delete categories</p>
            </div>
            <div class="mt-4 md:mt-0 flex items-center space-x-2">
                <input type="search" wire:model.live.debounce.300="search"
                    class="w-full md:w-64 py-2 px-3 bg-gray-100 dark:bg-neutral-700 border border-transparent rounded-lg text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Search categories..." />
                <a wire:navigate href="/add/category"
                    class="flex items-center gap-x-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Category
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
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-neutral-300">Created
                            At</th>
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-neutral-800 divide-y divide-gray-200 dark:divide-neutral-700">
                    @forelse ($categories as $category)
                        <tr wire:key="{{ $category->id }}">
                            <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">
                                {{ Str::limit($category->name, 30) }}</td>
                            <td class="px-4 py-3 text-sm text-gray-500 dark:text-neutral-500">
                                {{ $category->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-4 py-3 text-right">
                                <a wire:navigate href="/edit/{{ $category->id }}/category"
                                    class="text-blue-600 hover:underline dark:text-blue-400">Edit</a>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <button wire:click="delete({{ $category->id }})"
                                    wire:confirm.prompt="Type DELETE to confirm|DELETE"
                                    class="text-red-600 hover:underline dark:text-red-400">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4"
                                class="px-4 py-6 text-center text-sm text-gray-500 dark:text-neutral-400">
                                No categories found.
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
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
