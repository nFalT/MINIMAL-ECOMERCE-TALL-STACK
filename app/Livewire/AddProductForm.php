<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddProductForm extends Component
{
    use WithFileUploads;

    public $currentUrl;

    public $product_name = '';

    public $photo;

    public $product_description = '';

    public $product_price = '';

    public $all_categories;

    public $category_id;

    public function mount(){
        $this->all_categories = Category::all();
    }

    public function save(){
        $this->validate([
            'product_name' => 'required',
            'photo' => 'required|mimes:jpg,png|max:1024', // 1MB Max
            'product_description' => 'required',
            'product_price' => 'required|integer',
            'category_id' => 'required',
        ]);

        $path = $this->photo->store('photos', 'public');
        

        $product = new Product();
        $product->name = $this->product_name;
        $product->image = $path;
        $product->description = $this->product_description;
        $product->price = $this->product_price;
        $product->category_id = $this->category_id;
        $product->save();

        return $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        $current_url= url()->current();
        $explode_url = explode('/', $current_url);

        $this->currentUrl = $explode_url[3]. ' ' . $explode_url[4];

        return view('livewire.add-product-form')
        ->layout('admin-layout');
    }
}
