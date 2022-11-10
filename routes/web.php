<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('category', [FrontendController::class, 'category']);
Route::get('category/{slug}', [FrontendController::class, 'view_category']);
Route::get('category/{cate_slug}/{prod_slug}', [FrontendController::class, 'view_product']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function (){
    Route::post('add-to-cart', [CartController::class, 'addProduct']);
});


Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');

    Route::get('categories', 'Admin\CategoryController@index');
    Route::get('add-category', 'Admin\CategoryController@add');
    Route::post('insert-category', 'Admin\CategoryController@insert');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-products', [ProductController::class, 'insert']);

    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

});
