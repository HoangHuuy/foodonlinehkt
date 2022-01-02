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

Route::get('/', 'ProductController@indexAll')->name('showAllProduct');

Auth::routes();

// gio hang
Route::get('/add-to-cart/{id}','CartController@getAddToCart')->name('addToCart');

Route::get('/delete-item-cart/{id}', 'CartController@DeleteItemCart')->name('deleteCart');

Route::get('/shopping-cart','CartController@getCart')->name('shoppingCart');

Route::get('/delete-single-item-cart/{id}','CartController@DeleteSingleItem')->name('deleteSingleItemCart');

Route::get('/save-item-cart/{id}/{qty}','CartController@SaveItemCart')->name('saveItemCart');

// thanh toan
Route::get('/check-out','CheckOutController@getCheckOut')->name('checkout')->middleware('auth');

Route::post('/check-out','CheckOutController@postCheckOut')->name('postCheckout');

// san pham 
Route::group(['prefix' => 'product'], function (){
    Route::get('/{type}', 'ProductController@typeIndex')->name('user.showProduct');

    Route::get('/search', 'ProductController@searchProduct')->name('user.searchProduct');
});


//nguoi ban
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

    Route::get('/orders/show', 'SellerController@showOrders')->name('seller.showOrders');

    Route::post('/orders/show/{id}', 'SellerController@showOrders')->name('seller.showOrders');

    Route::get('/orders/change-status/{id}/{val}', 'SellerController@changeStatus')->name('seller.changeStatus');
});


//tai khoan nguoi dung
Route::group(['prefix' => 'account'], function (){
    Route::get('/profile', 'AccountController@edit')->name('user.showprofile');

    Route::post('/profile/{id}', 'AccountController@store')->name('user.storeAccount');

    Route::get('/orders', 'AccountController@showOrders')->name('user.showOrders');
});


// chi tiet san pham
Route::group(['prefix' => 'product'], function (){
    Route::get('/detail/{id}', 'ProductController@indexDetail')->name('product.detail');

    Route::post('/comment/{id}', 'ProductController@storeComment')->name('product.storeComment');

    Route::post('/detail/{id}', 'ProductController@report')->name('product.report');
});

// yeu thich
Route::get('/wishlist/{id}','WhistlistController@save')->name('wishlist.save');
Route::get('/wishlist-show','WhistlistController@show')->name('wishlist.show');

//danh muc
Route::get('/admin/category', 'CategoryController@show')->name('category.show');
Route::post('/admin/category/add', 'CategoryController@add')->name('category.add');
Route::post('/admin/category/update', 'CategoryController@update')->name('category.update');
Route::get('/admin/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
