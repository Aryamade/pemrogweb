<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbMahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'nim' => [
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => true,
        'auto_increment' => true,
        ],
        'nama' => [
        'type' => 'VARCHAR',
        'constraint' => '50',
        ],
        'jenis_kelamin' => [
        'type' => 'ENUM',
        'constraint' => 
        "'pria','wanita'",
        ],
        'jurusan' => [
        'type' => 'VARCHAR',
        'constraint' => '20',
        ],
        'prodi' => [
        'type' => 'VARCHAR',
        'constraint' =>'50'
        ],
        'no_telp' => [
        'type' => 'VARCHAR',
        'constraint' => '15',
        ],
        'alamat' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
        ],
        'created_at' => [
        'type' => 'DATETIME',
        'null' => true,
        ],
        'updated_at' => [
        'type' => 'DATETIME',
        'null' => true,
        ]
        ]);
        $this->forge->addPrimaryKey('nim');
        $this->forge->createTable('tb_mahasiswa');
    }

    public function down()
    {
         $this->forge->dropTable('tb_mahasiswa');
    }
}
