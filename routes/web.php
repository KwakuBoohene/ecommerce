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
Route::get('/product-detail-{id}','ProductsController@show')->name('product-detail');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart-empty', 'CartController@empty')->name('cart.empty');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart-{id}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');


