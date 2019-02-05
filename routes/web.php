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

Route::get('/','AbatJoursController@index');


Route::resource('abatjours','AbatJoursController');

Route::resource('orders','OrdersController') ;
Route::post('orders', 'UserOrdersController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('orders/{order}/parcels', 'OrderParcelsController@store');
Route::patch('/parcels/{parcel}', 'OrderParcelsController@update');


//Imagens
Route::get('/img/{path}', 'ImageController@show')->where('path', '.*');

//users
Route::resource('users','UserController')->middleware('can:update,user');

