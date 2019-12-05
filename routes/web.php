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

Route::group([
    'middleware' => ['web'],
    'prefix' => Config::get('route_prefix')
], function () {

    Route::get('/', 'Home\BaseController@index')->name('home');
    Route::get('/about', 'Page\BaseController@about')->name('about');
    Route::get('/contact', 'Page\BaseController@contact')->name('contact');
    Route::get('/services', 'Page\ServiceController@index')->name('services');
    Route::get('/service/{id}', 'Page\ServiceController@show')->name('service');

    Route::get('/shop', 'Shop\BaseController@index')->name('shop');

    Route::get('/product/{id}', 'Shop\ProductController@show')->name('product');

    Route::get('/cart','Shop\ProductController@cart')->name('cart');

    Route::get('cart/add/{product_id}/{qty}', 'Shop\ProductController@addCart');
    Route::get('cart/remove/{product_id}', 'Shop\ProductController@removeItemCart');

    Route::post('/send/request', 'Mail\BaseController@requestForm')->name('request');
    Route::post('/send/mail', 'Mail\BaseController@mailForm')->name('mail');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
