<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/play', function () {
    return view('partida');
});
Route::get('/groups', function () {
    return view('listadoAlumnos');
});
Route::get('/groups', function () {
    return view('grupos');
});
Route::get('/profile', function () {
    return view('perfil');
});
Route::get('/register', function () {
    return view('loginRegister');
});
Route::get('/login', function () {
    return view('loginRegister');
});
Route::get('/', function () {
    return view('index');
});
