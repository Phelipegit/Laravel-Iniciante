<?php

namespace App\Services;
use App\Models\Produto;
use Illuminate\Http\Request;

class NovoProduto
{
    public function criarNovoProduto(Request $request){
        $nome = $request->nome;
        $valor = $request->valor;
        $newProduto = [new Produto($nome,$valor),new Produto($nome,$valor)];
        file_put_contents("arquivo.txt",implode("\n",array_map(fn($item) => $item->__toString(),$newProduto)));
        file_put_contents("arquivo.txt","oi");
        return response()->json(['response' => array_map(fn($item) => $item->__toString(), $newProduto)],201);
    }
}
