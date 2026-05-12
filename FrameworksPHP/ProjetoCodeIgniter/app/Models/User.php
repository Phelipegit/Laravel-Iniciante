<?php

namespace App\Models;

class User
{
    private $nome;

    private string $senha;

    public function getNome() {
        return $this->nome;
    }
}