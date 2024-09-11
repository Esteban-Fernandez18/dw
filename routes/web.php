<?php

use App\Http\Controllers\login\loginCtrl;
use App\Http\Controllers\registrar\registrarCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginCtrl::class, 'loginView']);
Route::get('registar',[registrarCtrl::class, 'registrarView']);