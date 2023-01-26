<?php

use App\Http\Controllers\PuntuacionController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\GestionUsuariosCotroller;
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


Route::get('/groups', [GrupoController::class,'index'])->name('grupos.index')->middleware('auth');
Route::get('/groupsCreate', [GrupoController::class,'create'])->name('grupos.create')->middleware('auth');
Route::post('/groups', [GrupoController::class,'store'])->name('grupos.store')->middleware('auth');
Route::delete('/groups/{id}', [GrupoController::class,'destroy'])->name('grupos.destroy');

Route::get('/profile', function () {
    return view('perfil');
})->name('perfil');


Route::PATCH('/profile/update/{id}', [AuthenticatedSessionController::class, 'updateDatos'])->name('editarDatos');
Route::PATCH('/profile/{id}', [AuthenticatedSessionController::class, 'updateCuenta'])->name('editarCuenta');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/puntuaciones', [PuntuacionController::class, 'index'])->name('puntuaciones')->middleware('auth');


Route::get('/management', [GestionUsuariosCotroller::class, 'index'])->name('management.index');
Route::delete('/management/{id}', [GestionUsuariosCotroller::class, 'destroy'])->name('management.destroy');






Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
