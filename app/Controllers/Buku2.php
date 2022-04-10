<?php
namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Buku2 extends BaseController
{
 public function tampilBuku()
 
 {
     return view('buku/tampil_buku');
    //  echo ('tampil_buku');
 }
 
 public function page()
 {
     Echo view ('template/header');
     Echo view ('template/content');
     Echo view ('template/footer');
 }
 
 public function catalogBuku1()
 {
     $data =[
            'judul_buku' => 'belajar code igniter 4'
     ];
     return view('catalog_buku1', $data);
 }
 
 public function catalogBuku2()
 {
 $data = [
 'header_buku' => 'Catalog Buku',
 'penerbit' => 'Andi Yogyakarta',
 'judul_buku' => ['Belajar 
Codeigniter 3', 'Belajar PHP dan MySQL', 
'Belajar Laravel', 'Belajar Java']
 ];
 return view('catalog_buku2', $data);
 }
//  {
//  echo "Halo ini adalah controller Buku <a href='" . 
// route_to('judul') . "'>Link ke routing judul</a>";
//  }
//  public function judul()
//  {
//  echo "ini adalah method judul di controller Buku";
//  }
//  public function idBuku($id)
//  {
//  echo "ini adalah method idBuku, ID Buku : $id";
//  }
//  public function judulBuku($judul)
//  {
//  echo "ini adalah method judulBuku, Judul Buku : $judul";
//  }



}
