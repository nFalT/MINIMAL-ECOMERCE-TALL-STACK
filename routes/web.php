<?php

use App\Livewire\DashboardAdmin;
use App\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details', ProductDetails::class);

Route::get('/admin/dashboard', DashboardAdmin::class)
    ->middleware('admin');
