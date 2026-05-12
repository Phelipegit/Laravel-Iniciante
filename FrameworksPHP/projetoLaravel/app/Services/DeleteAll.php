<?php

namespace App\Services;
use App\Models\ProdutoModel;
class DeleteAll
{
    public static function deleteAll() {
        return ProdutoModel::query()->delete();
    }
}
