<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\ReclamanteController;
use App\Http\Controllers\ReclamadaController;

use App\Http\Controllers\StatusController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function(){
    Route::post('authentication', [AuthController::class, 'login'])->name('auth.login');
});

Route::prefix('/auth')->middleware('jwt.auth')->group(function(){
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('auth.refresh');
    Route::post('me', [AuthController::class, 'me'])->name('auth.me');
});

Route::prefix('/user')->middleware('jwt.auth')->group(function(){
    Route::post('create', [UserController::class, 'create'])->name('user.create');
});

Route::prefix('/processo')->middleware('jwt.auth')->group(function(){
    Route::post('registeReclamante', [ReclamanteController::class, 'cadastrarReclamante'])->name('registeReclamante.create');
    Route::post('registeReclamada',  [ReclamadaController::class, 'cadastraReclamada'])->name('registeReclamada.create');
    Route::post('registeProcesso',   [ProcessoController::class, 'cadastrarProcesso'])->name('registeProcesso.create');
});

Route::prefix('/audiencia')->middleware('jwt.auth')->group(function(){
    Route::post('registeStatus', [StatusController::class, 'registerStatus'])->name('registerStatus.create');
});
