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

Route::get('/customers', 'CustomerController@index')->name('customer.index');
Route::get('/customers{id}', 'CustomerController@show')->name('customer.show');
Route::get('/customers/create', 'CustomerController@create')->name('customer.create');