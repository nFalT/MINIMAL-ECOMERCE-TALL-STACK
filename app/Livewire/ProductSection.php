<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\ShoppingCart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductSection extends Component
{
    public $featuredProducts = [];
    public $categories = [];
    public $hasProducts = false;

    public function mount()
    {
        $this->featuredProducts = Product::latest()->take(8)->get();
        $this->hasProducts = Product::count() > 0;
        $this->categories = Category::whereHas('products')->take(4)->get();
    }

    public function addToCart(int $productId): void
    {
        $user = Auth::user();

        if (! $user) {
            session()->flash('error', 'Please login first!');
            return;
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]++;
        } else {
            $cart[$productId] = 1;
        }

        session()->put('cart', $cart);

        $this->dispatch('add-to-cart', productId: $productId);
    }

    public function render()
    {
        return view('livewire.product-section');
    }
}
