<?php

namespace App\Http\Controllers\registrar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registrarCtrl extends Controller
{
    public function registrarView() {
        return view('registrar/registrar');
    }
}