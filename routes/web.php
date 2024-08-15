<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

## Home route
Route::get('/', function () {
    return view('home');
});

## Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
});

## Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard', ['dashboardContent' => view('partials.Dashboard.home')]);
});

Route::get('/dashboard/teacher', function () {
    return view('dashboard', ['dashboardContent' => view('partials.Dashboard.teacher')]);
});

Route::get('/dashboard/students', function () {
    return view('dashboard', ['dashboardContent' => view('partials.Dashboard.students')]);
});