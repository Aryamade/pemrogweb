<?php
namespace App\Controllers;

use Config\View;

class Buku5 extends BaseController
{
 public function index()
{
    echo view('buku/page/welcome');
}
public function collection()
{
    echo View ('buku/page/collection');
}
}
