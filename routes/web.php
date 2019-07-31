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
    Route::get('/login', 'LoginController@login')->name('login');
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('/showUser', 'UserController@showUser')->name('showUser');
        Route::get('/createUser', 'UserController@createUser')->name('createUser');
        Route::post('/createUser', 'UserController@storeUser')->name('storeUser');
        Route::get('/editUser/{id}', 'UserController@editUser')->name('editUser');
        Route::post('/editUser/{id}', 'UserController@updateUser')->name('updateUser');
        Route::get('/deleteUser/{id}', 'UserController@deleteUser')->name('deleteUser');
    });
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('/show', 'ProductController@show')->name('show');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::post('/create', 'ProductController@store')->name('store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
        Route::post('/edit/{id}', 'ProductController@update')->name('update');
        Route::get('/delete/{id}', 'ProductController@delete')->name('delete');
    });
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('/show', 'CategoryController@show')->name('show');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/create', 'CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::post('/edit/{id}', 'CategoryController@update')->name('update');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('delete');
    });
    Route::prefix('brands')->name('brands.')->group(function(){
        Route::get('/show', 'BrandController@show')->name('show');
        Route::get('/create', 'BrandController@create')->name('create');
        Route::post('/create', 'BrandController@store')->name('store');
        Route::get('/confirm/{id}', 'BrandController@confirm')->name('confirm');
        Route::get('/cancel/{id}', 'BrandController@cancel')->name('cancel');
    });
    Route::prefix('orders')->name('orders.')->group(function(){
        Route::get('/show', 'OrderController@show')->name('show');
        Route::get('/confirm/{id}', 'OrderController@confirm')->name('confirm');
        Route::get('/cancel/{id}', 'OrderController@cancel')->name('cancel');
    });
});

Route::prefix('product')->namespace('Product')->name('product.')->group(function () {
    Route::get('/details', 'ProductController@details')->name('details');
    Route::get('/cart', 'ProductController@cart')->name('cart');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
