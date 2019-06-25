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
Route::get('/restaurante', 'PagesController@restaurante');
Route::get('/productos', 'PagesController@productos');
Route::get('/pedidos', 'PagesController@pedidos');
Route::get('/consultas', 'PagesController@consultas');

Auth::routes();

Route::get('admin', 'AdminController@index')->name('admin');
Route::get('admin/home', 'AdminController@home')->name('admin/home');
Route::get('admin/restaurante', 'AdminController@restaurante')->name('admin/restaurante');
//Route::get('admin/productos', 'AdminController@productos')->name('admin/productos');
Route::get('admin/pedidos', 'AdminController@pedidos')->name('admin/pedidos');
Route::get('admin/consultas', 'AdminController@consultas')->name('admin/consultas');

Route::resource('admin/productos', 'ProductsController');
Route::resource('admin/restaurante', 'FoodsController');
Route::resource('admin/images', 'ImagesController');


