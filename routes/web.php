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
    return view('dashboard');
});