<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){//metodo invoke para adminitrar una unica ruta
        return view('home');
    }
}
