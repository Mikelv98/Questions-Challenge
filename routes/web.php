<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SelectController;

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
//Route::get('/', function () {return view('welcome');})->name('/');
Route::get('/', [HomeController::class, 'create']);

Route::view('/ComoJugar', 'comojugar');
Route::view('/Preguntas', 'preguntas');

/*--------------------------------------------- Administrador ---------------------------------------------*/
Route::post( '/Login',         [AdministradorController::class, 'login' ] )->name('Login');
Route::get ( '/Administrador', [AdministradorController::class, 'create'] )->name('Administrador');
/*--------------------------------------------- Administrador ---------------------------------------------*/

/*--------------------------------------------- Juego ---------------------------------------------*/
Route::post( '/JuegoData', [JuegoController::class, 'showJuego'] )->name('JuegoData');
Route::get ( '/Juego',     [JuegoController::class, 'create'   ] )->name('Juego');
/*--------------------------------------------- Juego ---------------------------------------------*/

//Route::get('/Select', [SelectController::class, 'create']);

Route::get('/Select', [SelectController::class, 'index']);


Auth::routes();
