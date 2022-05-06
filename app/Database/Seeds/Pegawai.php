<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class Pegawai extends Seeder
{
    public function run()
    {
                $data = [
        [
            'nama' => 'Arya made',
            'tempat_lahir' => 'badung',
            'tanggal_lahir' => '2002-07-28',
            'jenis_kelamin' => 'pria',
            'no_telp' => '08123424332',
            'alamat' => 'Jl.uluwatu km 23 ',
            'jabatan' => 'staff admin',
            'created_at' => Time::now()
        ]
        ];
        $this->db->table('tb_pegawai')->insertBatch($data);
    }
}
