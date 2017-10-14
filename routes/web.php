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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/', 'CustomerController@index')->name('customer.index');
Route::get('/create', 'CustomerController@create')->name('customer.create');
Route::get('/{id}', 'CustomerController@show')->name('customer.show');
Route::post('/store', 'CustomerController@store')->name('customer.store');
Route::get('/{id}/delete', 'CustomerController@delete')->name('customer.delete');

Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::get('/products/{id}', 'ProductController@show')->name('product.show');
Route::post('/products/store', 'ProductController@store')->name('product.store');
Route::get('/products/{id}/delete', 'ProductController@delete')->name('product.delete');