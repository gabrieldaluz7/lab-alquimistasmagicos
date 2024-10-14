<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;

use App\Http\Middleware\CheckAuthenticated;


// Página inicial (index) que redireciona baseado no login
Route::get('/', [WebsiteController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/dashboard', [WebsiteController::class, 'dashboard'])->middleware(CheckAuthenticated::class)->name('dashboard');
Route::get('/strains', [WebsiteController::class, 'strains'])->middleware(CheckAuthenticated::class)->name('strains');

Route::get('/culturas', [WebsiteController::class, 'culturas'])->middleware(CheckAuthenticated::class)->name('culturas');
Route::get('/cultura/{idCultura?}', [WebsiteController::class, 'cultura'])->middleware(CheckAuthenticated::class)->name('cultura.show');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');