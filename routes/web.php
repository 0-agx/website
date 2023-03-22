<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\DashboardController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', [AuthController::class, 'login'])->name('login');
        Route::get('/do', [AuthController::class, 'loginDo'])->name('login-do');
    });

    Route::group(['prefix' => 'register'], function () {
        Route::get('/', [AuthController::class, 'register'])->name('register');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout/do', [AuthController::class, 'logoutDo'])->name('logout-do');

    Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    });
});
