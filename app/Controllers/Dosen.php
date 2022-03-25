<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function index()
    {
        echo'ini adalah controller Dosen';
    }
    // public function nama()
    // {
    //     $this->nama ='I WAYAN SUASNAWA,S.T.,M.T.,';
    //     $this->nip ='19711102001121002';
    //     // echo"Nama dosen pengampu mata kuliah Pemrograman Web 2 adalah". $nama . "dengan NIP" .$nip;
    //     echo"Nama dosen pengampu mata kuliah Pemrograman web 2 adalah $this->nama, dengan NIP $this->nip ";
    // }

    public function profilDosen($nama,$tlp){
       echo" Nama dosen pengampu mata kuliah Pemrograman web 2 adalah $nama,NO HP:$tlp ";

    }

    // public function dosen()
    // {
    //     echo"Nama dosen pengampu mata kuliah Pemrograman web 2 adalah: SUASNAWA,NO HP:081234567890";
    // }
}
