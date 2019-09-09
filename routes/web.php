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

Route::get('', 'ProductController@index')->name('index');
Route::get('create', 'ProductController@create')->name('create');
Route::get('{id}/edit', 'ProductController@edit')->name('edit');
Route::patch('{id}', 'ProductController@update')->name('update');
Route::post('store', 'ProductController@store')->name('store');
Route::get('{id}', 'ProductController@show')->name('show');
Route::delete('{id}', 'ProductController@destroy')->name('destroy');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
