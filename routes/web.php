<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use Gloudemans\Shoppingcart\Facades\Cart;

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

Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('home-page');
Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'App\Http\Controllers\ShopController@show')->name('shop.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/cart', 'App\Http\Controllers\CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchlater/{product}', 'App\Http\Controllers\CartController@switchSave')->name('cart.switchSave');

Route::delete('/later/{product}', 'App\Http\Controllers\SaveForLaterController@destroy')->name('later.destroy');
Route::post('/later/switchcart/{product}', 'App\Http\Controllers\SaveForLaterController@switchCart')->name('later.switchCart');

Route::get('/empty', function() {
    Cart::instance('saveForLater')->destroy();
});

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'App\Http\Controllers\CheckoutController@store')->name('checkout.store');

Route::get('/confirmation', 'App\Http\Controllers\ConfirmationController@index')->name('confirmation.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
