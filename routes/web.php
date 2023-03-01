<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// home
// showHome()
// select product
// select category
// select recommended
Route::get('/', function () {
    return view('welcome');
});






Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');




// get show details
// post create data
// delete delete data
// put to update data

Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


Route::get('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::put('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');


Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// middlware
// resource
Route::resource('category', CategoryController::class);
Route::get('/order', [OrderController::class, 'index'])->name('order.index')->middleware('auth');
Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
