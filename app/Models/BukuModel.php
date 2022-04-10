<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{

        protected $table = 'tb_buku2';
        protected $primaryKey = 'kd_buku';
        protected $returnType = 'object';
        protected $useSoftDeletes = true;
        protected $allowedFields = ['judul_buku', 'penerbit', 'tahun_terbit','harga', 'penulis'];
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $validationRules = [
            'judul_buku' => 'required|min_length[5]',
            'penerbit' => 'required|min_length[5]',
            'tahun_terbit' => 'required|numeric',
            'harga' => 'required|numeric',
            'penulis' => 'required|min_length[5]',
        ];
        protected $validationMessages = [
            'judul_buku' => [
            'required' => 'Bagian judul buku Harus diisi',
            'min_length' => 'Judul buku minimal 5 karakter'
        ],
            'penerbit' => [
            'required' => 'Bagian penerbit harus diisi',
            'min_length' => 'penerbit minimal 5 karakter'
        ],
            'tahun_terbit' => [
            'required' => 'Bagian tahun terbit harus diisi',
            'numeric' => 'Tahun terbit hanya bisa diisi dengan tahun'
        ],
            'harga' => [
            'required' => 'Bagian harga harus diisi',
            'numeric' => 'Harga hanya bisa diisi dengan angka'
        ],
            'penulis' => [
            'required' => 'Bagian nama penulis harus diisi',
            'min_length' => 'Nama penulis minimal 5 karakter'
        ]
        ];
 protected $skipValidation = false;
}