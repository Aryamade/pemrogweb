<?php
namespace App\Models;
use CodeIgniter\Model;
class AnggotaModel extends Model
{
    protected $table = "tb_anggota";
    protected $primaryKey = "id_anggota";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'tempat_lahir', 'tanggal_lahir','email', 'jenis_kelamin', 'no_telp', 'alamat'];
}
