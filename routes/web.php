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

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('module-one-index', 'ProductController@index')->name('product');
Route::post('register-product', 'ProductController@create');
Route::get('module-serverals-product', 'ProductController@viewMasive')->name('masive');
Route::post('register-product-masive', 'ProductController@store')->name('saving-products');
Route::get('query-products', 'ProductController@see')->name('see-Products');

Route::get('query-products', 'ProductController@load_products')->name('view-product-all-pro');