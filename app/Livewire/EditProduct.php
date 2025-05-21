<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;

    public $currentUrl;

    public $product_name = '';

    public $photo;

    public $product_description = '';

    public $product_price = '';

    public $all_categories;

    public $product_details;

    public $category_id;

    public function mount($id){
        $this->product_details = Product::find($id);
        $this->product_name = $this->product_details->name;
        $this->product_description = $this->product_details->description;
        $this->product_price = $this->product_details->price;
        $this->category_id = $this->product_details->category_id;
        $this->photo = $this->product_details->image;
        $this->all_categories = Category::all();
    }

    public function update(){
        $this->validate([
            'product_name' => 'required',
            'photo' => 'required|mimes:jpg,png|max:1024', // 1MB Max
            'product_description' => 'required',
            'product_price' => 'required|integer',
            'category_id' => 'required',
        ]);
        if($this->photo && !is_string($this->photo)){
            $photopath =  $this->photo->store('photos', 'public');
        }else{
            $photopath = $this->photo;
        }

        $this->product_details->update([
            'name' => $this->product_name,
            'description' => $this->product_description,
            'price' => $this->product_price,
            'category_id' => $this->category_id,
            'image' => $photopath,
        ]);

        return $this->redirect('/products', navigate: true);
    }
    public function render()
    {
        $current_url= url()->current();
        $explode_url = explode('/', $current_url);

        $this->currentUrl = $explode_url[3]. ' ' . $explode_url[4];
        return view('livewire.edit-product')->layout('admin-layout');
    }
}
