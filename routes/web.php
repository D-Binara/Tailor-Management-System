<?php

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::get('/new_order', [App\Http\Controllers\HomeController::class, 'new_order'])->name('new_order');
Route::post('/request_order', [App\Http\Controllers\OrderController::class, 'request_order'])->name('request_order');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/getProduct', [App\Http\Controllers\OrderController::class, 'getProduct'])->name('getProduct');

//admin routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin_home', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin_home');
    Route::get('/addProduct', [App\Http\Controllers\HomeController::class, 'addProduct'])->name('addProduct');
    Route::get('/view_orders', [App\Http\Controllers\HomeController::class, 'view_orders'])->name('view_orders');
    Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
});




