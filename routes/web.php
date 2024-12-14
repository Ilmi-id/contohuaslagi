<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login'); // Mengarah ke file login.blade.php
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

