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

Route::get('/', function () {
    return view('shop.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/segelyachts', [
    'uses' => 'YachtController@getSegelYachts',
    'as' => 'segelyachts'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'YachtController@getAddtoCart',
    'as' => 'addToCart'
]);

Route::get('/shoppingCart', [
    'uses' => 'YachtController@getCart',
    'as' => 'shoppingCart'
]);

Route::get('/home', function() {
    return view('shop.index');
})->name('start');

