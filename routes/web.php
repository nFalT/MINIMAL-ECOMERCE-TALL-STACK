<?php

use App\Livewire\AboutUs;
use App\Livewire\AddCategory;
use App\Livewire\AllProducts;
use App\Livewire\Contacts;
use App\Livewire\EditProduct;
use App\Livewire\ManageOrders;
use App\Livewire\AddProductForm;
use App\Livewire\DashboardAdmin;
use App\Livewire\ManagaProduct;
use App\Livewire\ProductDetails;
use App\Livewire\ManageCategories;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShoppingCartComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{product_id}/details',ProductDetails::class);

Route::get('/all/products',AllProducts::class)->name('products.index');

Route::get('/about',AboutUs::class);

Route::get('/contacts',Contacts::class);

Route::post('/checkout', function () {
    session()->forget('cart');

    session()->flash('success', 'Checkout successful!');

    return redirect()->back();
})->name('checkout.process');

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
})->name('shopping-cart');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard', DashboardAdmin::class)->name('dashboard');

    Route::get('/products',ManagaProduct::class)->name('products');

    Route::get('/orders',ManageOrders::class)->name('orders');

    Route::get('/add/product', AddProductForm::class);

    Route::get('/manage/categories', ManageCategories::class);
    //adding category form
    Route::get('/add/category', AddCategory::class);
    //editing products
    Route::get('/edit/{id}/product', EditProduct::class);
});
