<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('example');
});

Route::post('/calcularSoma', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $soma = $num1 + $num2;
    return response()->json(['soma' => $soma]);
});
