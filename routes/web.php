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


Auth::routes();

Route::get('/', 'HomeController@index')->name('/');

Route::resource('products', 'FrontProductsController', ['only' => ['index', 'show']])->middleware('auth');
Route::get('search','FrontProductsController@search')->name('search')->middleware('auth');

Route::resource('users', 'FrontUsersController', ['only' => ['show', 'edit', 'update', 'destroy']])->middleware('auth');

Route::resource('carts', 'FrontCartController', ['only' => ['index', 'store', 'destroy']])->middleware('auth');

Route::resource('orders', 'FrontOrdersController', ['only' => ['index', 'store', 'show', 'destroy']])->middleware('auth');

Route::post('deleteOrder','FrontOrdersController@deleteOrder')->name('deleteOrder')->middleware('auth');
Route::get('threemonthsIndex','FrontOrdersController@threemonthsIndex')->name('threemonthsIndex')->middleware('auth');
Route::get('orderComplete','FrontordersController@orderComplete')->name('orderComplete')->middleware('auth');;