<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});