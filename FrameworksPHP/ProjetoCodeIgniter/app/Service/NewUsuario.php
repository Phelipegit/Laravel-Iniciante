<?php

namespace App\Service;

use App\Models\UserModel;
use Ramsey\Uuid\Uuid;
use CodeIgniter\HTTP\IncomingRequest;
class NewUsuario
{
    public function salvarUsuario(IncomingRequest $request) {
        $userModel = new UserModel();
        $userModel->insert(['id' => Uuid::uuid4()->toString(),'nome'=>$request->getVar('nome'),'password'=>$request->getVar('senha'), 'ativo'=>true]);
        return service('response')->setJSON(['response' => "Senha já existente", "success" => true]);
    }
}