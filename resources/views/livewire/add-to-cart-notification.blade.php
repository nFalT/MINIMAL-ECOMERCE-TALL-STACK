<div x-data="{
    visible: false,
    productName: '',
    timeout: null,
    showNotification(detail) {
        this.productName = detail.productName;
        this.visible = true;

        if (this.timeout) clearTimeout(this.timeout);

        this.timeout = setTimeout(() => {
            this.visible = false;
        }, 3000);
    }
}" @add-to-cart.window="showNotification($event.detail)"
    class="fixed bottom-6 left-6 z-50 transform transition-all duration-300 ease-out"
    :class="{ 'translate-y-0 opacity-100': visible, 'translate-y-10 opacity-0': !visible }">
    <div class="bg-green-600 text-white px-5 py-3 rounded-lg shadow-lg flex items-center max-w-sm">
        <div class="flex-shrink-0 mr-3 bg-white bg-opacity-20 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div class="flex-grow">
            <p class="font-medium mb-0.5">Added to Cart!</p>
            <p class="text-sm text-green-100" x-text="productName"></p>
        </div>
        <div class="flex-shrink-0 ml-4 flex flex-col items-end">
            <button @click="visible = false" class="text-green-100 hover:text-white transition-colors p-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <a href="{{ route('shopping-cart') }}" class="text-xs text-green-100 hover:text-white underline mt-2">View
                Cart</a>
        </div>
    </div>
</div>
