<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    
    Route::get('/product', 'ProductController@index')->name('product');
    Route::match([
        'get', 
        'post'
    ], '/product/action/{option?}/{id?}', 'ProductController@action')
    ->name('product.action');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
