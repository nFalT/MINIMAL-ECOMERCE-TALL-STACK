<?php

use App\Livewire\AboutUs;
use App\Livewire\AddCategory;
use App\Livewire\AllProducts;
use App\Livewire\Contacts;
use App\Livewire\EditCategory;
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
    // Get cart items from session or database
    $cart = session('cart', []);
    $items = [];
    $total = 0;
    
    // Process cart items
    foreach ($cart as $id => $details) {
        $product = \App\Models\Product::find($id);
        if ($product && is_array($details) && isset($details['quantity'])) {
            $total += $product->price * $details['quantity'];
            $item = (object)[
                'product' => $product,
                'quantity' => $details['quantity'],
                'price' => $product->price
            ];
            $items[] = $item;
        }
    }
    
    // Create order record with the correct total
    $order = \App\Models\Order::create([
        'user_id' => auth()->id(),
        'total' => $total,
        'status' => 'pending',
    ]);
    
    // Clear cart first to speed up response
    $userEmail = auth()->user()->email;
    session()->forget('cart');
    
    // Queue the email sending to happen in the background
    dispatch(function() use ($order, $items, $total, $userEmail) {
        try {
            \Mail::to($userEmail)->send(new \App\Mail\CheckoutSummary($order, $items, $total));
            \Log::info('Email sent to: ' . $userEmail);
        } catch (\Exception $e) {
            \Log::error('Email error: ' . $e->getMessage());
        }
    });
    
    return redirect()->route('checkout.success')->with('success', 'Order placed successfully!');
})->name('checkout.process')->middleware('auth');

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
    Route::get('/edit/{id}/category', EditCategory::class);
});

// Add this route for checkout success
Route::get('/checkout/success', function () {
    return view('checkout.success');
})->name('checkout.success');

// AJAX routes for cart operations
Route::post('/add-to-cart/{id}', function ($id) {
    $product = \App\Models\Product::findOrFail($id);
    $cart = session()->get('cart', []);
    
    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
    }
    
    session()->put('cart', $cart);
    
    return response()->json([
        'success' => true,
        'cartCount' => count($cart)
    ]);
})->name('cart.add');
