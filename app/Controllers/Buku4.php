<?php
namespace App\Controllers;

use Config\View;

class Buku4 extends BaseController
{
 public function index()
{
    return view('selamat_datang');
}
public function catalog()
{
    echo View ('catalogbuku');
}
}
