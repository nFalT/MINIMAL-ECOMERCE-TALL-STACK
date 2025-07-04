<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $categories;
    public $isMenuOpen = false;
    public $cartCount = 0;
    
    protected $listeners = [
        'add-to-cart' => 'updateCartCount',
        'remove-from-cart' => 'updateCartCount'
    ];
    
    public function mount()
    {
        $this->categories = Category::take(5)->get();
        $this->updateCartCount();
    }
    
    public function updateCartCount()
    {
        $this->cartCount = session()->has('cart') ? count(session('cart')) : 0;
    }
    
    public function toggleMenu()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }
    
    public function render()
    {
        return view('livewire.header');
    }
}
