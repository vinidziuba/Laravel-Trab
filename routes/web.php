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

//Route::get('/', 'IndexController@index');
//Route::get('/contato', 'ContatoController@index');
//Route::get('/contato/rh', 'ContatoController@rh');
Route::get('/', 'HomeController@index');
Route::get('/product', 'ProductController@index');
Route::get('/about', 'AboutController@index');
