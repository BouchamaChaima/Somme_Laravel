<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SommeController extends Controller
{
    public function calcule(){
        return view('somme',['result' => request('Nombre1') + request('Nombre2'), 
        'val1' => request('Nombre1'), 'val2' => request('Nombre2')]);
    }
}
