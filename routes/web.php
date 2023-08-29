<?php

declare(strict_types=1);

use App\Http\Controllers;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\IndexController::class, 'index'])->name('index');

Route::get('/login', [Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [Controllers\Auth\LoginController::class, 'login'])->name('login.execute');

Route::get('/logout', [Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

Route::get('/sign-up', [Controllers\Auth\SignUpController::class, 'index'])->name('register');
Route::post('/sign-up', [Controllers\Auth\SignUpController::class, 'signUp'])->name('register.execute');

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/home', [Controllers\HomeController::class, 'home'])->name('home');
});
