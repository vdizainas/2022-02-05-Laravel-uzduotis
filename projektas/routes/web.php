<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function() {
    Route::get('', 'App\Http\Controllers\ProductController@index')->name('product.index');
    Route::get('create', 'App\Http\Controllers\ProductController@create')->name('product.create');
    Route::post('store', 'App\Http\Controllers\ProductController@store')->name('product.store');
    Route::get('show/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');
    Route::get('edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
    Route::post('update/{product}', 'App\Http\Controllers\ProductController@update')->name('product.update');
    Route::post('destroy/{product}', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');
});

Route::prefix('product_category')->group(function() {
    Route::get('', 'App\Http\Controllers\ProductCategoryController@index')->name('productCategory.index');
    Route::get('create', 'App\Http\Controllers\ProductCategoryController@create')->name('productCategory.create');
    Route::post('store', 'App\Http\Controllers\ProductCategoryController@store')->name('productCategory.store');
    Route::get('show/{product}', 'App\Http\Controllers\ProductCategoryController@show')->name('productCategory.show');
    Route::get('edit/{product}', 'App\Http\Controllers\ProductCategoryController@edit')->name('productCategory.edit');
    Route::post('update/{product}', 'App\Http\Controllers\ProductCategoryController@update')->name('productCategory.update');
    Route::post('destroy/{product}', 'App\Http\Controllers\ProductCategoryController@destroy')->name('productCategory.destroy');
});

