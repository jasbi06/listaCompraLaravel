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
    return 'Pantalla Principal';
});

Route::get('/login', function () {
    return 'Login Usuario';
});

Route::get('/logout', function () {
    return 'Logout Usuario';
});

Route::get('/productos', function () {
    return 'Listado productos';
});

Route::get('/productos', function () {
    return 'Listado productos';
});

Route::get('/productos/show/{id}', function ($id) {
    return 'Vista detalle producto ' . $id;
});

Route::get('/productos/create', function () {
    return 'Añadir Producto';
});

Route::get('/productos/edit/{id}', function ($id) {
    return 'Modificar producto ' . $id;
});
