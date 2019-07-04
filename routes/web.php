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

Route::get('/', 'PagesController@home');

Route::any('/productos', 'PagesController@productos'); /* Search */

Auth::routes();

Route::get('admin', 'AdminController@index')->name('admin');
Route::resource('admin/productos', 'ProductsController');
Route::resource('admin/restaurante', 'FoodsController');

Route::post('/contact-us','ContactUsController@contactUsPost');


