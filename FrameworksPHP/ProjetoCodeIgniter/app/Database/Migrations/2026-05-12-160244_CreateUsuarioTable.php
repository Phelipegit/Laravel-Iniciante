<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Faker\Core\Uuid;

class CreateUsuarioTable extends Migration
{
    protected $table = 'usuario';

    protected $validationRules = [
        'nome' => 'required|min_length[5]|max_length[50]',
        'password' => 'required|min_length[8]|max_length[255]',
    ];
    public function up() {
        $this->forge->addField([
            'id' => ['type' => 'UUID','null' => false],
            'nome' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => false],
            'password' => ['type' => 'VARCHAR', 'constraint' => '255','null' => false],
            'ativo' => ['type' => 'BOOLEAN', 'default' => true],
        ]);
        $this->forge->addKey('id',true);

        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
