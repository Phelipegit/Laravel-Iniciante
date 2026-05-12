<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = ["id",'nome','password','ativo'];

    protected $useAutoIncrement = false;
}