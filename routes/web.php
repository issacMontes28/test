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

Route::get('/','ProductController@index');
Route::get('Merch/{type}','ProductController@showProduct')->name('Merch');
Route::get('product/showDetails/{id}','ProductController@show_details')->name('showDetails');
Route::resource('product','ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
