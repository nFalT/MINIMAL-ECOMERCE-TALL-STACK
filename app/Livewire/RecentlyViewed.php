<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class RecentlyViewed extends Component
{
    public $products = [];
    public $maxItems = 4;
    
    public function mount($currentProductId = null)
    {
        $recentlyViewed = session()->get('recently_viewed', []);
        
        // Add current product to recently viewed if provided
        if ($currentProductId) {
            if (($key = array_search($currentProductId, $recentlyViewed)) !== false) {
                unset($recentlyViewed[$key]);
            }
            array_unshift($recentlyViewed, $currentProductId);
            $recentlyViewed = array_slice($recentlyViewed, 0, 10); // Keep only last 10
            session()->put('recently_viewed', $recentlyViewed);
        }
        
        if (count($recentlyViewed) > 0) {
            $this->products = Product::whereIn('id', $recentlyViewed)
                ->when($currentProductId, function($query) use ($currentProductId) {
                    return $query->where('id', '!=', $currentProductId);
                })
                ->limit($this->maxItems)
                ->get()
                ->sortBy(function($product) use ($recentlyViewed) {
                    return array_search($product->id, $recentlyViewed);
                });
        }
    }
    
    public function render()
    {
        return view('livewire.recently-viewed');
    }
}
