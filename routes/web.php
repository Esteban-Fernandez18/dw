<?php

use App\Http\Controllers\login\loginCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginCtrl::class, 'loginView']);