<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Login;

Route::get('/', [C_Login::class, 'login_page']);