<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [AuthController::class, 'index']);

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index');
    Route::get('/user/view/{id}', 'view');
    Route::get('/user/insert', 'add');
    Route::post('/user/insert', 'insert');
    Route::get('/user/update/{id}', 'edit');
    Route::post('/user/update/{id}', 'update');
    Route::get('/user/delete/{id}', 'delete');
});

Route::controller(PasienController::class)->group(function () {
    Route::get('/pasien', 'index');
    Route::get('/pasien/view/{id}', 'view');
    Route::get('/pasien/insert', 'add');
    Route::post('/pasien/insert', 'insert');
    Route::get('/pasien/update', 'edit');
    Route::post('/pasien/update', 'update');
    Route::get('/pasien/delete/{id}', 'delete');
});