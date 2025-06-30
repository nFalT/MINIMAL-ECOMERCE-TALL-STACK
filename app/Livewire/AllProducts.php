<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class AllProducts extends Component
{
    public $products;
    public $categoryName = "All Products";
    public $categoryFilter;

    public function mount(Request $request)
    {
        $this->categoryFilter = $request->input('category');

        if ($this->categoryFilter) {
            $category = Category::find($this->categoryFilter);
            $this->categoryName = $category ? $category->name : "All Products";
            $this->products = Product::where('category_id', $this->categoryFilter)->get();
        } else {
            $this->products = Product::all();
        }
    }
    
    public function render()
    {
        return view('livewire.all-products');
    }
    
    public function addToCart($productId)
    {
        $product = \App\Models\Product::find($productId);
        
        if (!$product) {
            return;
        }
        
        $cart = session()->get('cart', []);
        
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
        
        session()->put('cart', $cart);
        
        $this->dispatch('cart-updated', cartCount: count($cart));
        $this->dispatch('add-to-cart', productName: $product->name);
        
        session()->flash('success', 'Product added to cart!');
    }
}
