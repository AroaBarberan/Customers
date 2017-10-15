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

use Illuminate\Support\Facades\Auth;

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/', 'CustomerController@index')->name('customer.index');
Route::get('/customers/create', 'CustomerController@create')->name('customer.create');
Route::get('/customers/{id}', 'CustomerController@show')->name('customer.show');
Route::post('/customers/store', 'CustomerController@store')->name('customer.store');
Route::get('/customers/{id}/delete', 'CustomerController@delete')->name('customer.delete');

Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::get('/products/{id}', 'ProductController@show')->name('product.show');
Route::get('/products/{id}/showSome', 'ProductController@showSome')->name('product.showSome');
Route::post('/products/store', 'ProductController@store')->name('product.store');
Route::get('/products/{id}/delete', 'ProductController@delete')->name('product.delete');