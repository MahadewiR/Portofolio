<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
Route::resource('profile', \App\Http\Controllers\ProfileController::class);
Route::resource('education', \App\Http\Controllers\EducationController::class);
Route::resource('experiences', \App\Http\Controllers\ExperiencesController::class);
