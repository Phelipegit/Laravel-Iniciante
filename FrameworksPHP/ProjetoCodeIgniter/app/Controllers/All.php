<?php

namespace App\Controllers;


use App\Service\GAD;

class All extends BaseController
{
    public function index() {
        $all = new GAD();
        return $all->devolverDados();
    }
}