<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class ProductSection extends Component
{
    public $featuredProducts = [];
    public $categories = [];
    public $hasProducts = false;
    
    public function mount()
    {
        // Get up to 8 newest products
        $this->featuredProducts = Product::latest()->take(8)->get();
        
        // Check if we have any products at all
        $this->hasProducts = Product::count() > 0;
        
        // Get categories that have products
        $this->categories = Category::whereHas('products')->take(4)->get();
    }
    
    public function render()
    {
        return view('livewire.product-section');
    }
}
