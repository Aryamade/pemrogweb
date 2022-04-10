<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Controllers\BaseController;

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

    public function insertdata()
        {
            $mhs = new mahasiswaModel();
            $insert = $mhs-> insert([
                'nama'      => 'Arya made batur suryana',
                'jurusan'   => 'teknik elektro',
                'prodi'     => 'manajemen informatika' 
            ]);

            if ($insert){
                echo "data berhasil diinsert";
            }
            else {
                echo "<pre>";
                echo print_r($mhs->errors());
                echo "<pre>";
            }
        }

    public function updatedata($id)
    {
        $mhs = new MahasiswaModel();
        $update = $mhs->update($id,[
            'nama'      => 'Arya Made Batur Suryana',
            'jurusan'   => 'Teknik Elektro',
            'prodi'     => 'D3 Manajemen Informatika'
        ]);
        if ($update){
            echo "data berhasil diupdate";
        }
        else{
            echo "<pre>";
            echo print_r($mhs->errors());
            echo "<pre>";
        }
    }

    public function saveinsert()
    {
        $mhs = new MahasiswaModel();
        $data = [
            'nama'      => 'I Made ari',
            'jurusan'   => 'Akuntansi',
            'prodi'     => 'D4 Akuntansi Manajerial'
        ];
        $simpan=$mhs->save($data);
        if ($simpan){
            echo "data berhasil disimpan";
        }
        else{
            echo "<pre>";
            echo print_r($mhs->errors());
            echo "<pre>";
        }
    }

    public function saveupdate($id)
    {
        $mhs = new MahasiswaModel();
        $data =[
            'id'        => $id,
            'nama'      => 'I Made ari',
            'jurusan'   => 'Akuntansi',
            'prodi'     => 'D3 Akuntansi Manajerial'
        ];
        $simpan=$mhs->save($data);
        if ($simpan){
            echo "data berhasil disimpan";
        }
        else{
            echo"<pre";
            echo print_r($mhs->errors());
            echo"<pre";
        }
    }

     public function saveupdate2($id)
    {
        $mhs = new MahasiswaModel();
        $datamhs = $mhs->find($id);
        $datamhs->nama = 'I Kadek Ari ';
        $simpan=$mhs->save($datamhs);
        if ($simpan) {
        echo "Data Berhasil diupdate";
        } 
        else {
        echo "<pre>";
        echo print_r($mhs->errors());
        echo "</pre>";
        }
    }

     public function deletedata($id)
    {
        $mhs = new mahasiswaModel();
        $hapus=$mhs->delete($id);
        if ($hapus) {
        echo "Data Berhasil dihapus";
        }
        else {
        echo "<pre>";
        echo print_r($mhs->errors());
        echo "</pre>";
        }
    }
     
     public function delete_few()
    {
        $mhs = new mahasiswaModel();
        $hapus=$mhs->delete([3,4]);
        if ($hapus) {
        echo "Data Berhasil dihapus";
        }
        else {
        echo "<pre>";
        echo print_r($mhs->errors());
        echo "</pre>";
        }
    }

     public function delete_where()
    {
        $mhs = new mahasiswaModel();
        $hapus=$mhs->where('nama', 'Arya made batur suryana')->delete();
        if ($hapus) {
        echo "Data Berhasil dihapus";
        }
        else {
        echo "<pre>";
        echo print_r($mhs->errors());
        echo "</pre>";
        }
    }

    public function delete_purge()
    {
        $mhs = new mahasiswaModel();
        $hapus=$mhs->purgeDeleted();
        if ($hapus) {
        echo "Data Berhasil dihapus Permanent";
        }
        else {
        echo "<pre>";
        echo print_r($mhs->errors());
        echo "</pre>";
        }
    }

     public function getdata_find($id)
    {
    $mhs = new mahasiswaModel();
    $datamhs = $mhs->find($id);
    echo "<pre>";
    echo print_r($datamhs);
    echo "</pre>";
    }

    public function getdata_fColoumn()
    {
    $mhs = new mahasiswaModel();
    $datamhs = $mhs->findColumn('nama');
    echo "<pre>";
    echo print_r($datamhs);
    echo "</pre>";
    }

    public function getdata_fAll()
    {
    $mhs = new mahasiswaModel();
    $datamhs = $mhs->findAll();
    echo "<pre>";
    echo print_r($datamhs);
    echo "</pre>";
    }

     public function getdata_fAllW()
    {
    $mhs = new mahasiswaModel();
    $datamhs = $mhs->where("id","7")->findAll();
    echo "<pre>";
    echo print_r($datamhs);
    echo "</pre>";
    }

     public function getdata_fAll_limit($limit, $offset)
    {
    $mhs = new mahasiswaModel();
    $datamhs = $mhs->findAll($limit, $offset);
    echo "<pre>";
    echo print_r($datamhs);
    echo "</pre>";
    }

     public function getdata_first()
 {
 $mhs = new mahasiswaModel();
 $datamhs = $mhs->where("id","7")->first();
 echo "<pre>";
 echo print_r($datamhs);
 echo "</pre>";
 }

  public function getdata_fAllWD()
 {
 $mhs = new mahasiswaModel();
 $datamhs = $mhs->withDeleted()->findAll();
 echo "<pre>";
 echo print_r($datamhs);
 echo "</pre>";
 }

 public function getdata_fAllOD()
 {
 $mhs = new mahasiswaModel();
 $datamhs = $mhs->onlyDeleted()->findAll();
 echo "<pre>";
 echo print_r($datamhs);
 echo "</pre>";
 }

}
