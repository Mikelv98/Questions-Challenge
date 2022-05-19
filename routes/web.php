<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PlayerController;
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
Route::get('/home', [HomeController::class, 'home']);
/*--------------------------------------------- Administrador ---------------------------------------------*/

/*--------------------------------------------- Juego ---------------------------------------------*/
Route::post( '/JuegoData',         [JuegoController::class, 'showJuego'] )->name('JuegoData');
Route::get ( '/Juego',             [JuegoController::class, 'create'   ] )->name('Juego');
Route::post ( '/JuegoPregunta',    [JuegoController::class, 'preguntas'   ] )->name('JuegoPregunta');
Route::post ( '/AbandonarPartida',    [JuegoController::class, 'abandonar'   ] )->name('AbandonarPartida');
/*--------------------------------------------- Juego ---------------------------------------------*/

/*--------------------------------------------- Configuracion del Juego---------------------------------------------*/
Route::get ('/Select',        [SelectController::class, 'index']);
Route::post('/Select/Config', [SelectController::class, 'store' ])->name('Config');
/*--------------------------------------------- Configuracion del Juego ---------------------------------------------*/

/*--------------------------------------------- Jugadores ---------------------------------------------*/
Route::get ('/Jugadores',           [PlayerController::class, 'create'])->name('Jugadores');
Route::post('/Jugadores/Config',    [PlayerController::class, 'store' ])->name('ConfigJugadores');
/*--------------------------------------------- Jugadores ---------------------------------------------*/
/*--------------------------------------------- Crud admin tematicas ---------------------------------------------*/
Route::get ('/AdministradorTematicas',         [AdministradorController::class, 'view'])->name('AdministradorTematicas');
Route::get ('/NuevaTematica',                  [AdministradorController::class, 'createtematica'])->name('NuevaTematica');
Route::post('creartematica',                   [AdministradorController::class, 'storetematica']);
Route::get ('/EditarTematica/{id}',            [AdministradorController::class, 'edittematica'])->name('EditarTematica');
Route::patch('updatetematica/{id}',            [AdministradorController::class, 'updatetematica']);
Route::get('EliminarTematica/{id}',            [AdministradorController::class, 'destroytematica']);

Route::get ('/AdministradorPreguntas',         [AdministradorController::class, 'viewpreguntas'])->name('AdministradorPreguntas');
Route::get ('/NuevaPregunta',                  [AdministradorController::class, 'createpregunta'])->name('NuevaPregunta');
Route::post('crearpregunta',                   [AdministradorController::class, 'storepregunta']);
Route::get ('/EditarPregunta/{id}',            [AdministradorController::class, 'editpregunta'])->name('EditarPRegunta');
Route::patch('updatepregunta/{id}',            [AdministradorController::class, 'updatepregunta']);
Route::get('EliminarPregunta/{id}',            [AdministradorController::class, 'destroypregunta']);
/*--------------------------------------------- Crud admin tematicas ---------------------------------------------*/

/*--------------------------------------------- Guardar Partida ---------------------------------------------*/
Route::post ('/GuardarPartida/{ImgJugadores}',     [JuegoController::class, 'guardar'   ] )->name('GuardarPartida');
Route::get ('/NumPartida/{id}',                     [JuegoController::class, 'numpartida'])->name('NumPatida');
/*--------------------------------------------- Guardar Partida ---------------------------------------------*/

/*--------------------------------------------- Recuperar Partida ---------------------------------------------*/
Route::post ('/RecuperarPartida',           [JuegoController::class, 'recuperarpartida'   ] )->name('RecuperarPartida');
Route::get ('/Recuperar',                   [JuegoController::class, 'recuperar'])->name('Recuperar');
Route::get ('/AbandonarPartida',            [JuegoController::class, 'abandonar'])->name('AbandonarPartida');
/*--------------------------------------------- Recuperar Partida ---------------------------------------------*/

Auth::routes();
