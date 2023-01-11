<?php

use App\Http\Controllers\UsuarioController;
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
})->name('partida');

// Route::get('/groups', function () {
//     return view('listadoAlumnos');
// })->name('listadoAlumnos');

Route::get('/groups', function () {
    return view('grupos');
})->name('grupos');

Route::get('/profile', function () {
    return view('perfil');
})->name('perfil');

Route::get('/login', function () {
    return view('loginRegister');
})->name('login');

Route::post('/login', [UsuarioController::class,'store'])->name('login.store');



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/puntuaciones', function () {
    return view('puntuaciones');
})->name('puntuaciones');

