<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// Página inicial (index) que redireciona baseado no login
Route::get('/', function () {
    if (session()->has('user')) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
})->name('index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');