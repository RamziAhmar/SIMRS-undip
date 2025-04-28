<?php

use App\Http\Controllers\DashboardController;
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

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/view/{id}', 'view');
    Route::get('/users/insert', 'add');
    Route::post('/users/insert', 'insert');
    Route::get('/users/update', 'edit');
    Route::post('/users/update', 'update');
    Route::get('/users/delete/{id}', 'delete');
});