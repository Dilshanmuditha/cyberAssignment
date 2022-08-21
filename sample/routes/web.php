<?php

use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Product $products) {
    $products = Product::all();
    return view('welcome',[
        'products' => $products,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('dashboard/addProduct',[ProductsController::class,'create']);
Route::post('dashboard',[ProductsController::class,'store']);
Route::get('dashboard/products',[ProductsController::class,'show']);
Route::get('dashboard/modify',[ProductsController::class,'modify']);
Route::get('dashboard/{products:id}/edit',[ProductsController::class,'edit']);
Route::patch('dashboard/{products:id}',[ProductsController::class,'update']);
Route::delete('dashboard/{products:id}',[ProductsController::class,'destroy']);