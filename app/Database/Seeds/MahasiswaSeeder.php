<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
        'nama' => 'Arya made batur suryana',
        'jenis_kelamin' => 'Laki_laki',
        'jurusan' => 'Teknik elektro',
        'prodi' => 'manajemen informatika',
        'no_telp' => '08123835457234',
        'alamat' => 'Jl.uluwatu xxx',
        'created_at' => Time::now()
        ],
        ];
        
        $this->db->table('tb_mahasiswa')->insertBatch($data);

    }
}
