<?php

use Illuminate\Support\Facades\Route;

## Home route
Route::get('/', function () {
    return view('home');
});

## Auth routes
Route::get('/login', function () {
    return view('login');
});

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