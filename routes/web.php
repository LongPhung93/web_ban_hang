<?php

use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend
Route::get('',[\App\Http\Controllers\frontend\IndexController::class,'Index'])->name('index');
Route::get('about',[\App\Http\Controllers\frontend\IndexController::class,'About'])->name('about');
Route::get('contact',[\App\Http\Controllers\frontend\IndexController::class,'Contact'])->name('contact');
Route::get('register',[\App\Http\Controllers\backend\LoginController::class,'showRegister'])->name('register.show');
Route::post('register',[\App\Http\Controllers\backend\LoginController::class,'postRegister'])->name('register.post');

Route::group(['prefix'=>'products'],function (){
    Route::get('{id}/detail',[ProductController::class,'detail'])->name('detail');
    Route::get('/',[ProductController::class,'getAll'])->name('getAll');
//    Route::get('{id}/category',[ProductController::class,'getProductByCategory'])->name('getProductByCategory');
    Route::get('filter',[ProductController::class,'filter'])->name('filter');
    Route::get('{id}/add-to-cart', [CartController::class,'add'])->name('addCart');
});

Route::group(['prefix'=>'category'],function (){
    Route::get('{id}/product',[ProductController::class,'getProductByCategory'])->name('getProductByCategory');
});


Route::group(['prefix'=>'checkout'],function () {
    Route::get('/',[\App\Http\Controllers\frontend\CheckoutController::class,'getAll'])->name('checkout.getAll');
    Route::post('/',[\App\Http\Controllers\frontend\CheckoutController::class,'getOrder'])->name('checkout.getOrder');
    Route::get('complete/{orderId}',[\App\Http\Controllers\frontend\CheckoutController::class,'complete'])->name('checkout.complete');
});

Route::group(['prefix'=>'cart'], function() {
   Route::get('/',[CartController::class,'getAll'])->name('cart.getAll');
   Route::get('update/',[CartController::class,'update'])->name('cart.update');
   Route::get('delete/{rowId}',[CartController::class,'destroy'])->name('cart.destroy');

});



//Backend
Route::get('login',[\App\Http\Controllers\backend\LoginController::class,'Login'])->name('login');
Route::post('login',[\App\Http\Controllers\backend\LoginController::class,'postLogin'])->name('postLogin');
Route::get('logout',[\App\Http\Controllers\backend\LoginController::class,'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group( function() {
    Route::get('/',[\App\Http\Controllers\backend\IndexController::class,'Index'])->name('admin.index');

    Route::group(['prefix'=>'users'], function(){
        Route::get('/',[\App\Http\Controllers\backend\UserController::class,'getAll'])->name('user.getAll');
        Route::get('add',[\App\Http\Controllers\backend\UserController::class,'create'])->name('user.create');
        Route::post('add',[\App\Http\Controllers\backend\UserController::class,'store'])->name('user.store');
        Route::get('{id}/edit',[\App\Http\Controllers\backend\UserController::class,'edit'])->name('user.edit');
        Route::post('{id}/edit',[\App\Http\Controllers\backend\UserController::class,'update'])->name('user.update');
        Route::get('delete/{id}',[\App\Http\Controllers\backend\UserController::class,'destroy'])->name('user.destroy');
    });
    Route::group(['prefix'=>'products'], function() {
        Route::get('/',[\App\Http\Controllers\backend\ProductController::class,'getAll'])->name('product.getAll');
        Route::get('add',[\App\Http\Controllers\backend\ProductController::class,'create'])->name('product.create');
        Route::post('add',[\App\Http\Controllers\backend\ProductController::class,'store'])->name('product.store');
        Route::get('{id}/edit',[\App\Http\Controllers\backend\ProductController::class,'edit'])->name('product.edit');
        Route::post('{id}/edit',[\App\Http\Controllers\backend\ProductController::class,'update'])->name('product.update');
        Route::get('{id}/delete',[\App\Http\Controllers\backend\ProductController::class,'destroy'])->name('product.destroy');
    });
    Route::group(['prefix'=>'category'], function() {
        Route::get('/',[\App\Http\Controllers\backend\CategoryController::class,'getAll'])->name('category.getAll');
        Route::post('/',[\App\Http\Controllers\backend\CategoryController::class,'store'])->name('category.store');
        Route::get('edit/{id}',[\App\Http\Controllers\backend\CategoryController::class,'edit'])->name('category.edit');
        Route::post('edit/{id}',[\App\Http\Controllers\backend\CategoryController::class,'update'])->name('category.update');
        Route::get('delete/{id}',[\App\Http\Controllers\backend\CategoryController::class,'destroy'])->name('category.destroy');
    });
    Route::group(['prefix'=>'order'], function() {
        Route::get('/',[\App\Http\Controllers\backend\OrderController::class,'order'])->name('order.order');
        Route::get('{id}/detail',[\App\Http\Controllers\backend\OrderController::class,'detail'])->name('order.detail');
        Route::get('{id}/handle',[\App\Http\Controllers\backend\OrderController::class,'handle'])->name('order.handle');
        Route::get('processed',[\App\Http\Controllers\backend\OrderController::class,'Processed'])->name('order.processed');
    });
});





