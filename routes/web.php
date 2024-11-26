<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home.index');

//Login user
Route::get('account/login', [UserController::class, 'index'])->name('account.login');
Route::post('account/login', [UserController::class, 'login'])->name('account.login');

//Register user
Route::get('account/register', [UserController::class, 'register'])->name('account.register');
Route::post('account/processRegister', [UserController::class, 'processRegister'])->name('account.processRegister');
Route::get('account/logout', [UserController::class, 'logout'])->name('account.logout');
Route::get('account/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
