<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductListing extends Component
{
    public $products;

    public $category_id;

    public function mount()
    {
        if ($this->category_id) {
            $this->products = Product::with('category')
                ->where('category_id', $this->category_id)
                ->limit(4)
                ->orderBy('created_at', 'DESC')
                ->get();
        } else {
            $this->products = Product::with('category')->limit(4)->get();
        }
    }

    public function render()
    {
        return view('livewire.product-listing');
    }
}
