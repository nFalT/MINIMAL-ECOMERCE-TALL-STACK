<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public $category_id;
    public $category_name;
    public $currentUrl;

    public function mount($id)
    {
        $category = Category::findOrFail($id);

        $this->category_id = $category->id;
        $this->category_name = $category->name;

        $current_url = url()->current();
        $explode_url = explode('/', $current_url);
        $this->currentUrl = $explode_url[3] . ' ' . $explode_url[4];
    }

    public function update()
    {
        $this->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($this->category_id);
        $category->name = $this->category_name;
        $category->save();

        session()->flash('message', 'Category updated successfully.');

        return redirect('/manage/categories');
    }

    public function render()
    {
        return view('livewire.edit-category')->layout('admin-layout');
    }
}
