<div class='px-10 md:px-20 sm:px-30 py-3'>
    <h2 class='font-medium text-[20px] my-3'>{{ $categoryName }}</h2>

    @php
        $all = 'all';
    @endphp
    <livewire:product-listing :category_id="request('category', 'all')" :current_product_id="0" />
</div>
