<?php
namespace App\Models;
use CodeIgniter\Model;
class PegawaiModel extends Model
{
    protected $table = "tb_pegawai";
    protected $primaryKey = "id_pegawai";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'tempat_lahir', 'tanggal_lahir','jenis_kelamin','no_telp','alamat','jabatan'];
}
