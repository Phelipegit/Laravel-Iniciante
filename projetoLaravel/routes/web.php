<?php

use App\Services\CalcularSoma;
use App\Services\NovoProduto;
use App\Services\ProdutosAll;
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

Route::get('/pegarProdutosAll', function () {
    $produtos = new ProdutosAll();
    return $produtos->getProdutosAll();
});
