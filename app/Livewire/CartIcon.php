<?php

namespace App\Livewire;

use Livewire\Component;

class CartIcon extends Component
{
    public $cartCount = 0;
    
    protected $listeners = [
        'add-to-cart' => 'updateCartCount',
        'remove-from-cart' => 'updateCartCount'
    ];
    
    public function mount()
    {
        $this->updateCartCount();
    }
    
    public function updateCartCount()
    {
        $this->cartCount = session()->has('cart') ? count(session('cart')) : 0;
    }
    
    public function render()
    {
        return view('livewire.cart-icon');
    }
}
