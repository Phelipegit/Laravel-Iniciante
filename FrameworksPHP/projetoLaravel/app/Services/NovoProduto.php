<?php

namespace App\Services;
use App\Models\ProdutoL;
use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class NovoProduto
{
    public function criarNovoProduto(Request $request){
        $nome = $request->nome;
        $valor = $request->valor;
        $newProduto = [new ProdutoL($nome,$valor)];
        file_put_contents("arquivo.txt",implode("\n",array_map(fn($item) => $item->__toString(),$newProduto)));
        file_put_contents("arquivo.txt","oi");
        if(ProdutoModel::where('nome', strtoupper($nome))->exists()) {

            $produto = ProdutoModel::where('nome', strtoupper($nome))->first();
            $produto->update(['nome' => "se lascou 2x", 'valor' => $valor]);
            return response()->json(['response' => "Produto já existe"],400);
        }
        ProdutoModel::create(['nome' => strtoupper($nome),'preco' => $valor]);
        return response()->json(['response' => array_map(fn($item) => $item->__toString(), $newProduto)],201);
    }
}
