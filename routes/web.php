<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;

Route::prefix('admin')->group(function () {

    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('admin.login.submit');
    Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
    Route::get('/resetpassword', [AuthController::class, 'resetPassword'])->name('resetpassword');

});
