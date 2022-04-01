<?php
namespace App\Controllers;
class Mahasiswa extends BaseController
{
//  public function index()
//  {
//  echo 'Halo ini adalah controller Mahasiswa';
//  }
//  public function nama($nama, $nim)
//  {
//  echo "Nama Saya adalah " . $nama . ", NIM " . $nim;
//  }
//  protected function sampleprivate()
//  {
//  echo "Ini adalah contoh private method";
//  }
//  public function testingprivate()
//  {
//  return $this->sampleprivate();
//  }
    public function index()
    {
        $data =[
            'nama' => 'Arya Made Batur Suryana',
            'nim' => '2015323045',
            'jurusan' => 'Teknik Elektro',
            'prodi' => 'Manajemen Informatika',
        ];
        // return view('page/mahasiswa');
        return view('page/mahasiswa',$data);
    // echo 'Halo ini adalah method index - controller 
    // Mahasiswa';
    }
    // public function addMahasiswa()
    // {
    // echo 'Halo ini adalah method addMahasiswa - controller 
    // Mahasiswa';
    // }
    // public function updateMahasiswa($nim)
    // {
    // echo 'Halo ini adalah method updateMahasiswa - controller 
    // Mahasiswa';
    // }
    // public function deleteMahasiswa($nim)
    // {
    // echo 'Halo ini adalah method deleteMahasiswa - controller 
    // Mahasiswa';
    // } 
    // public function profilMahasiswa($nama,$usia)
    // {
    // echo "Nama anda adalah $nama, usia $usia";
    // } 

}
