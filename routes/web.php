<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\TestController;
use App\Http\Controllers\admin\CategoryController;



Route::prefix('admin')->group(function () {

    Route::middleware('admin.guest')->group(function () {
        Route::get('/', [AuthController::class, 'login'])->name('login');
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'loginSubmit'])->name('admin.login.submit');
        Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
        Route::get('/resetpassword', [AuthController::class, 'resetPassword'])->name('resetpassword');
    });

    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs');
        Route::get('/tests', [TestController::class, 'index'])->name('admin.tests');
        Route::resource('categories', CategoryController::class);
    });

});
