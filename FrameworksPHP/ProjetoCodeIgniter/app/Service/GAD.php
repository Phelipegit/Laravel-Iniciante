<?php

namespace App\Service;

use App\Models\UserModel;

class GAD
{
    public function devolverDados() {
        $all = new UserModel();
        return service('response')->setJSON(['all' => $all->findAll()]);
    }
}