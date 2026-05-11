<?php

use App\Services\CalcularSoma;
use App\Services\NovoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('example');
});

Route::post('/calcularSoma', function (Request $request) {
    $calcularSoma = new CalcularSoma();
    return $calcularSoma->calcularSoma($request);
});

Route::post('/criarNovoProduto',function(Request $request){
    $novoProduto = new NovoProduto();
    return $novoProduto->criarNovoProduto($request);
});
