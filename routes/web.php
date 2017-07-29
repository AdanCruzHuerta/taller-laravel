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
    return view('login', ['title' => "Login"]);
});
Route::get('/registrar', function() {
    return view('registrar', ['title' => "Registrar"]);
});
Route::post('/registrar', 'UserController@registrar');
Route::post('/login', 'UserController@login');
Route::get('/cerrar-sesion', 'UserController@cerrarSesion');

Route::get('/panel', 'UserController@panel');