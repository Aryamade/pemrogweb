<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
    public function index()
    {
        $data =[
            'nama' => 'V_KARYAWAN_IT ',
            'jenis_kelamin' => 'laki-laki'
        ];
        return view('page/karyawan',$data);
    }
}
