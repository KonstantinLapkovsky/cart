<?php

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

Route::get('/', 'ProductController@index')->name('product.index');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');
Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');

Route::prefix('user')->group(function() {
	Route::get('/signup', 'UserController@getSignup')->name('user.signup');
	Route::post('/signup', 'UserController@postSignup')->name('user.signup');
	Route::get('/signin', 'UserController@getSignin')->name('user.signin');
	Route::post('/signin', 'UserController@postSignin')->name('user.signin');
	Route::get('/profile', 'UserController@getProfile')->name('user.profile');
	Route::get('/logout', 'UserController@getLogout')->name('user.logout');
});

