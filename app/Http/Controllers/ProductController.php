<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // ...existing methods...

    public function store(Request $request)
    {
        $request->validate([
            // ...existing validation rules...
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('products', $filename, 'public');
        }

        $product = Product::create([
            // ...other fields...
            'image' => $imagePath,
        ]);

        // ...existing code...
    }

    // ...existing methods...
}