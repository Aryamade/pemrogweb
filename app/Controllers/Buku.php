<?php
namespace App\Controllers;
class Buku extends BaseController
{
 public function index()
 {
 echo "Halo ini adalah controller Buku <a href='" . 
route_to('judul') . "'>Link ke routing judul</a>";
 }
 public function judul()
 {
 echo "ini adalah method judul di controller Buku";
 }
 public function idBuku($id)
 {
 echo "ini adalah method idBuku, ID Buku : $id";
 }
 public function judulBuku($judul)
 {
 echo "ini adalah method judulBuku, Judul Buku : $judul";
 }
}
