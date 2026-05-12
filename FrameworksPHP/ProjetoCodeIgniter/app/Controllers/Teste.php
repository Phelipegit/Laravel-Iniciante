<?php

namespace App\Controllers;


use App\Service\NewUsuario;
class Teste extends BaseController
{
    public function index() {
        $usuario = new NewUsuario();

        return $usuario->salvarUsuario($this->request);
    }
}