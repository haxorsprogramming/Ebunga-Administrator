<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Dashboard;

// login
Route::get('/', [C_Login::class, 'login_page']);
Route::post('/auth/login/proses', [C_Login::class, 'login_proses']);

// dashboard
Route::get('/dashboard', [C_Dashboard::class, 'dashboard']);
