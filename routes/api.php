<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
    Route::post('create', [UserController::class, 'create'])->name('auth.logout');
});
