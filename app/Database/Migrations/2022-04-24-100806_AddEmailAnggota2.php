<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmailAnggota2 extends Migration
{
   public function up()
 {
 $this->forge->addColumn('tb_anggota2', [
 'email' => [
 'type' => 'VARCHAR',
'constraint' => '40',
 'after' => 'tanggal_lahir'
 ]
 ]);
 }
 public function down()
 {
 $this->forge->dropColumn('tb_anggota2', 'email');
 }
}
