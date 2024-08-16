<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\DashboardAccess;

## Home route
Route::get('/', function () {
    return view('home');
});

## Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

## Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard', ['dashboardContent' => view('partials.Dashboard.home')]);
})->middleware(DashboardAccess::class);

Route::get('/dashboard/teacher', [TeacherController::class, 'show'])->middleware(DashboardAccess::class);
Route::get('/dashboard/students', [StudentController::class, 'show'])->middleware(DashboardAccess::class);