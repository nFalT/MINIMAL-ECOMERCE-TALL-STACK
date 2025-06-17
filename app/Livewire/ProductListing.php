<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductListing extends Component
{
    public $category_id = 0;
    public $current_product_id = 0;
    public $products = [];
    public $limit = 4;

    protected $queryString = ['category_id'];

    public function mount()
    {
        $query = Product::query()->latest();

        if ($this->category_id !== 'all' && $this->category_id > 0) {
            $query->where('category_id', $this->category_id);
        }

        if ($this->current_product_id > 0) {
            $query->where('id', '!=', $this->current_product_id);
        }

        $this->products = $query->get();
    }

    public function addToCart($productId)
    {
        $this->dispatch('add-to-cart', productId: $productId);
    }

    public function render()
    {
        return view('livewire.product-listing');
    }
}
