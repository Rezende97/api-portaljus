<?php

use App\Http\Controllers\AdvogadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\ReclamanteController;
use App\Http\Controllers\ReclamadaController;

use App\Http\Controllers\StatusController;
use App\Http\Controllers\AudienciaController;
use App\Http\Controllers\regiaoController;
use App\Http\Controllers\varaController;

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
    Route::get('listReclamada',  [ReclamadaController::class, 'listReclamada'])->name('listReclamada.list');
    Route::get('listReclamante',  [ReclamanteController::class, 'listReclamante'])->name('listReclamante.list');

    Route::post('registeReclamante', [ReclamanteController::class, 'cadastrarReclamante'])->name('registeReclamante.create');
    Route::post('registeReclamada',  [ReclamadaController::class, 'cadastraReclamada'])->name('registeReclamada.create');
    Route::post('registeProcesso',   [ProcessoController::class, 'cadastrarProcesso'])->name('registeProcesso.create');
});

Route::prefix('/audiencia')->middleware('jwt.auth')->group(function(){

    Route::get('listAudiencia', [AudienciaController::class, 'listAudiencia'])->name('listAudiencia.listar');

    Route::post('registeStatus', [StatusController::class, 'registerStatus'])->name('registerStatus.create');
    Route::post('tipoAudiencia', [AudienciaController::class, 'tipoAudiencia'])->name('tipoAudiencia.create');
    Route::post('registerAudiencia', [AudienciaController::class, 'registerAudiencia'])->name('registerAudiencia.create');
});

Route::prefix('/advogado')->middleware('jwt.auth')->group(function(){
    Route::post('registerAdvogado', [AdvogadoController::class, 'registerAdvogado'])->name('registerAdvogado.create');
});

Route::prefix('/vara')->middleware('jwt.auth')->group(function(){
    Route::post('registerVara', [varaController::class, 'registerVara'])->name('registerVara.create');
});

Route::prefix('/regiao')->middleware('jwt.auth')->group(function(){
    Route::post('registeRegiao', [regiaoController::class, 'registeRegiao'])->name('registeRegiao.create');
});
