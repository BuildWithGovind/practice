<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\TestController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\Front\AuthController as FrontAuthController;
use App\Http\Controllers\Front\UserController;



Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::any('/logout', [FrontAuthController::class, 'logout'])->name('logout');
Route::get('/login', [FrontAuthController::class, 'login'])->name('frontlogin');
Route::post('/login', [FrontAuthController::class, 'authlogin'])->name('authlogin');
Route::get('/signup', [FrontAuthController::class, 'signup'])->name('signup');
Route::post('/signup', [FrontAuthController::class, 'authsignup'])->name('authsignup');
Route::get('/forgot', [FrontAuthController::class, 'forgot'])->name('forgot');
Route::post('/authforgot', [FrontAuthController::class, 'authforgot'])->name('authforgot');
Route::get('/verify/{id}', [FrontAuthController::class, 'verify'])->name('verify');
Route::post('/authverify', [FrontAuthController::class, 'authverify'])->name('authverify');



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
