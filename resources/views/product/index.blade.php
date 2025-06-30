<!-- resources/views/product/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <div class="product-image">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                @else
                    <img src="{{ asset('images/no-image.jpg') }}" alt="No image available" class="w-full h-48 object-cover">
                @endif
            </div>
            <div class="p-4">
                <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-700 mt-2">{{ $product->description }}</p>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-xl font-bold text-blue-500">${{ $product->price }}</span>
                    <!-- Make sure your add to cart button has the correct class and data attribute -->
                    <button class="add-to-cart bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" data-id="{{ $product->id }}">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection