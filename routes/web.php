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


/*
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Logout Usuario';
});
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'productos'], function () {
        Route::get('/', 'ProductosController@getIndex');

        Route::get('/show/{id}', 'ProductosController@getShow')->where('id', '[0-9]+');

        Route::get('/create', 'ProductosController@getCreate');
        Route::post('/create', 'ProductosController@postCreate');

        Route::put('/changeRented/{id}', 'ProductosController@changeRented');

        Route::get('/edit/{id}', 'ProductosController@getEdit')->where('id', '[0-9]+');
        Route::put('/edit/{id}', 'ProductosController@putEdit');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
