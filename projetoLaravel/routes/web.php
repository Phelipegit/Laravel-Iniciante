<?php

use App\Services\CalcularSoma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('example');
});

Route::post('/calcularSoma', function (Request $request) {
    $calcularSoma = new CalcularSoma();
    return $calcularSoma->calcularSoma($request);
});
