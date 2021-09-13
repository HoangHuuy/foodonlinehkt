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
Route::get('/', 'CartController@indexIcon')->name('cart.icon');

Route::get('/', 'ProductController@indexAll')->name('showAllProduct');

Auth::routes();

Route::group(['prefix' => 'seller'], function (){
    Route::get('/', 'SellerController@index')->name('seller.home');
    Route::get('/product/add', 'ProductController@create')->name('seller.addProduct');
    Route::post('/product/add', 'ProductController@store')->name('seller.storeProduct');
    Route::get('/product/list', 'ProductController@sellerIndex')->name('seller.showProduct');
    Route::get('/product/edit/{id}', 'ProductController@edit')->name('seller.editProduct');
    Route::post('/product/update/{id}', 'ProductController@update')->name('seller.updateProduct');
    Route::get('/product/delete/{id}', 'ProductController@destroy')->name('seller.deleteProduct');
    Route::get('/address/show/{id}', 'SellerController@indexAddress')->name('seller.showAddress');
    Route::post('/address/add/{id}', 'SellerController@update')->name('seller.updateAddress');
    Route::get('/address/add', 'SellerController@index3')->name('seller.addAddress');
});

Route::group(['prefix' => 'account'], function (){
    Route::get('/profile/{id}', 'AccountController@edit')->name('user.showprofile');
    Route::post('/profile/{id}', 'AccountController@store')->name('user.storeAccount');
});

Route::group(['prefix' => 'product'], function (){
    Route::get('/detail/{id}', 'ProductController@indexDetail')->name('product.detail');
});

Route::group(['prefix' => 'don-hang'], function (){
    Route::post('/','OderController@store')->name('oder.store');
});

Route::group(['prefix' => 'cart'], function (){
    Route::get('/', 'CartController@index')->name('cart');
});