<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ROUTE LOGIN-LOGOUT

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::middleware(['auth'])->group(function () {
    Route::get('portofolio', [\App\Http\Controllers\PortofolioController::class, 'index'])->name('portofolio');
    Route::get('portofolio/about', [\App\Http\Controllers\PortofolioController::class, 'about'])->name('about');
    Route::get('portofolio/experiences', [\App\Http\Controllers\PortofolioController::class, 'experiences'])->name('experiences');
    Route::get('portofolio/portos', [\App\Http\Controllers\PortofolioController::class, 'portos'])->name('portos');
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('education', \App\Http\Controllers\EducationController::class);
    Route::resource('experiences', \App\Http\Controllers\ExperiencesController::class);
    Route::resource('skills', \App\Http\Controllers\SkillController::class);
    Route::resource('portos', \App\Http\Controllers\PortosController::class);
});
