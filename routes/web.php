<?php

use App\Livewire\AddProductForm;
use App\Livewire\DashboardAdmin;
use App\Livewire\ManagaProduct;
use App\Livewire\ManageOrders;
use App\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin'], function(){
    Route::get('/product/details', ProductDetails::class);

    Route::get('/admin/dashboard', DashboardAdmin::class)->name('dashboard');

    Route::get('/products', ManagaProduct::class)->name('products');

    Route::get('/orders', ManageOrders::class)->name('orders');

    Route::get('/add/product', AddProductForm::class);

});

