<?php

use App\CountryVisits;
use Gloudemans\Shoppingcart\Facades\Cart;

// Shop and welcome
Route::get('/', 'WelcomePageController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/shop/search/{query}', 'ShopController@search')->name('shop.search');


// Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}/{cart}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/save-later/{product}', 'CartController@saveLater')->name('cart.save-later');
Route::post('/cart/add-to-cart/{product}', 'CartController@addToCart')->name('cart.add-to-cart');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');

// checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::get('/checkoutbilling', 'CheckoutController@billing')->name('checkout.billing');
Route::post('/checkoutbilling', 'CheckoutController@savebilling')->name('checkout.billing');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/guest-checkout', 'CheckoutController@index')->name('checkout.guest');

// coupon
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon/', 'CouponsController@destroy')->name('coupon.destroy');

// auth routes
Auth::routes();
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/country_visits', function() {
        $countryVisits = CountryVisits::orderBy('visits', 'desc')->paginate(10);
        return view('admin.visits')->with(['countryVisits' => $countryVisits]);
    })->name('voyager.visits');
});
