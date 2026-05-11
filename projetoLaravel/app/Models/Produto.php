<?php

namespace App\Models;

use DateTime;
class Produto
{
    private string $id;
    private string $nome;
    private float $valor;

    private DateTime $validade;

    public function __construct(string $nome, float $valor) {
        $this->id = uniqid('',true);
        $this->nome = $nome;
        $this->valor = $valor;
        $this->validade = new DateTime();
}
    public function getId() : string {
        return $this->id;
    }

    public function __toString() : string {
        return $this->nome . ' - ' . $this->valor;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getValor() : float {
        return $this->valor;
    }

    public function getValidade() : DateTime {
        return $this->validade;
    }
}
