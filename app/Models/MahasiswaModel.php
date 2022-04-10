<?php 
namespace App\Models;
use CodeIgniter\Model;
class MahasiswaModel extends Model
{

        protected $table = 'tb_mahasiswa';
        protected $primaryKey = 'id';
        protected $returnType = 'object';
        protected $useSoftDeletes = true;
        protected $allowedFields = ['nama', 'jurusan', 'prodi'];
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $validationRules = [
            'nama' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
           
        ];
        protected $validationMessages = [
            'nama' => [
            'required' => 'Bagian nama tidak boleh kosong'
        ],
            'jurusan' => [
            'required' => 'Bagian jurusan harus diisi'
        ],
            'prodi' => [
            'required' => 'Bagian prodi tidak boleh kosong'
        ]
        ];
 protected $skipValidation = false;

}