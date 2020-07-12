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
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/cart','CartController@index');

Route::get('/payment','PaymentController@index');

Route::post('/payment','PaymentController@makepay');

Route::get('/data','PaymentController@data');

Route::get('/product/add','ProductController@create');

Route::get('/product/delete/{id}','ProductController@destroy');

Route::get('/product/edit/{id}','ProductController@edit');

Route::post('/product/update','ProductController@update');

Route::post('/product/search','ProductController@search');

Route::get('/cart/create/{id}','CartController@create'); //Add to cart

Route::get('/cart/item','CartController@index'); // Show cart items

Route::post('/cart/edit/{rowId}','CartController@update'); //update cart item

Route::get('/cart/delete/{rowId}','CartController@destroy'); //remove cart item

Route::get('/checkout/shipping','ShippingController@create'); //shipping page

Route::post('/checkout/shipping','ShippingController@store'); //shipping address store

Route::post('/product/store','ProductController@store');

Route::get('/','ProductController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
