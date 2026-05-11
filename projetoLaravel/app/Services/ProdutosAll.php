<?php

namespace App\Services;

use App\Models\ProdutoModel;
use Illuminate\Support\Collection;
class ProdutosAll {
    public function getProdutosAll() : \Illuminate\Http\JsonResponse
    {
        return response()->json(ProdutoModel::all(),201);
    }
}
