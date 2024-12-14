<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController\homeController;

// Route::get('/', function () {
//     return view('index');
// });

route::get('/', [homeController::class, 'index']) ->name('home');

Route::get('/login', function () {
    return view('login'); // Mengarah ke file login.blade.php
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

