<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\activitiesDashboardController;
use App\Http\Controllers\formLoginController;
use App\Http\Controllers\formValidationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/view_submit', 'userForm')->name('view.submit');
Route::view('/view_login', 'login')->name('view.login');
Route::view('/view_dashboard', 'dashboard')->name('dashboard.profile');

Route::post('/submit', [formValidationController::class, 'formSubmit'])->name('form.post');
Route::post('/login', [formLoginController::class, 'loginForm'])->name('form.login');