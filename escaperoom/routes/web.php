<?php

use App\Http\Controllers\PuntuacionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
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


Route::get('/groups', function () {
    return view('grupos');
})->name('grupos');

Route::get('/profile', function () {
    return view('perfil');
})->name('perfil'); 


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/puntuaciones', [PuntuacionController::class, 'index'])->name('puntuaciones');






Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class,'store']);
Route::post('/logout', [AuthenticatedSessionController::class,'destroy'])->name('logout');


Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class,'store'])->name('register.store');
