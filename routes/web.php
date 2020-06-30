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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','IndexController@index')->name('index');
Route::get('/products','ProductsController@index')->name('products');
Route::get('/product-details','ProductController@show')->name('single-product');

Route::view('/product','product-detail');
Route::view('/cart','cart');
Route::view('/checkout','checkout');

