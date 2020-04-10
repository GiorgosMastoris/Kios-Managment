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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/product', 'ProductController@index')->name('product');

Route::resource('category', 'CategoryController');

Route::get('/product/create', 'ProductController@create')->name('product.create');

Route::post('/product/create', 'ProductController@store')->name('product.store');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource ('/users', 'UsersController', ['except' => ['show', 'create' , 'store']]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
