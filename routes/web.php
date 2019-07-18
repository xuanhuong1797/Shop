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

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/index', 'AdminController@index')->name('index');
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('/showUser', 'AdminController@showUser')->name('showUser');
        Route::get('/createUser', 'AdminController@create')->name('createUser');
        Route::get('/editUser', 'AdminController@edit')->name('editUser');
    });
});

Route::prefix('product')->namespace('Product')->name('product.')->group(function () {
    Route::get('/details', 'ProductController@details')->name('details');
    Route::get('/cart', 'ProductController@cart')->name('cart');
});