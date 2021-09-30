<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {



    $router->get('/', 'HomeController@index')->name('home');
//    $router->get('demo/users', );
    $router->get('/user', 'HomeController@index2')->name('home2');

    $router->get('/user/delete/{id}', 'HomeController@delete')->name('user.delete');
    $router->get('/user/add', 'HomeController@add')->name('user.add');
    $router->get('user/edit/{id}', 'HomeController@edit')->name('user.edit');
    $router->post('user/update/{id}', 'HomeController@update')->name('user.update');
    $router->post('user/searchUser', 'HomeController@searchUser')->name('user.search');
    $router->post('product/searchProduct', 'ExampleController@searchProduct')->name('user.search');


    $router->get('/product', 'ExampleController@index')->name('product.home');
    $router->get('/product/delete/{id}', 'ExampleController@delete')->name('product.delete');
//    $router->get('/product/add', 'ExampleController@add')->name('product.add');
    $router->get('product/edit/{id}', 'ExampleController@edit')->name('product.edit');
    $router->post('product/update/{id}', 'ExampleController@update2')->name('product.update');
    $router->get('/feedback', 'ExampleController@showFeedback')->name('admin.showFeedback');
    $router->get('/feedback/delete/{id}', 'ExampleController@deteleFeedback')->name('admin.deleteFeedback');
    $router->get('/feedback/{id}', 'ExampleController@showFeedback')->name('admin.showFeedback');



});
