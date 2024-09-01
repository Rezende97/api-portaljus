<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RouterViews\DashboardController;
use App\Http\Controllers\RouterViews\LoginController;
use App\Http\Controllers\RouterViews\ReclamanteController;
use App\Http\Controllers\RouterViews\ReclamadaController;
use App\Http\Controllers\RouterViews\ProcessoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// tela de login
Route::get('/', [LoginController::class, 'autenticacao'])->name('login');

// dashboard grafico
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//endpoint cadastrar reclamante
Route::get('/reclamante', [ReclamanteController::class, 'reclamante'])->name('reclamante');

//endpoint cadastrar reclamada
Route::get('/reclamada', [ReclamadaController::class, 'reclamada'])->name('reclamada');

//endpoint cadastrar processo
Route::get('/processo', [ProcessoController::class, 'processo'])->name('processo');
