<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SommeController;

Route::get('/',function(){
    return view('somme');
})->name('home');

Route::post('/',[SommeController::class, 'calcule'])->middleware('somme');

Route::get('/test',function(){
    return view('test');
});

Route::post('test',function(){
    return view('test')->with('txt',request('txt'));
})->middleware('txt');

