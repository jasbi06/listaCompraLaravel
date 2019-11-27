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

Route::get('/', 'HomeController@getHome');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Logout Usuario';
});

Route::get('/productos', 'ProductosController@getIndex');

Route::get('/productos/show/{id}', 'ProductosController@getShow')->where('id', '[0-9]+');

Route::get('/productos/create', 'ProductosController@getCreate');

Route::get('/productos/edit/{id}', 'ProductosController@getEdit')->where('id', '[0-9]+');
