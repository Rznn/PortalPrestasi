<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompetitionController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/competition/index', [CompetitionController::class, 'index']);
Route::get('/admin/competition/create', [CompetitionController::class, 'create']);
Route::post('/admin/competition/create', [CompetitionController::class, 'store'])->name('competition.store');
Route::get('/admin/competition/details/{id}', [CompetitionController::class, 'detail'])->name('competition.detail');
Route::get('/admin/competition/edit/{id}', [CompetitionController::class, 'edit'])->name('competition.edit');
Route::put('/admin/competition/edit/{id}', [CompetitionController::class, 'update'])->name('competition.update');
Route::get('/admin/competition/details/{id}/delete', [CompetitionController::class, 'delete'])->name('competition.delete');
