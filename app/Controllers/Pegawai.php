<?php
namespace App\Controllers;
use App\Models\PegawaiModel;
use App\Controllers\BaseController;

class Pegawai extends BaseController
{
 protected $Pegawai;
 function __construct()
    {
        $this->Pegawai = new PegawaiModel();
    }

 public function index()
    {
        $data['pegawai'] = $this->Pegawai->findAll();
        return view('pegawai/index', $data);
    }

 public function create()
    {
     return view('pegawai/create');
    }

 public function store()
    {
        if (!$this->validate([
            'nama' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
            'tempat_lahir' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
            'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
            'jenis_kelamin' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
            'no_telp' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
            'alamat' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
            'jabatan' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} Harus diisi'
            ]
            ],
        ])) {
    session()->setFlashdata('error', $this->validator->listErrors());
    return redirect()->back()->withInput();
    }

    $this->Pegawai->insert([
    'nama' => $this->request->getVar('nama'),
    'tempat_lahir' => $this->request->getVar('tempat_lahir'),
    'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
    'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
    'no_telp' => $this->request->getVar('no_telp'),
    'alamat' => $this->request->getVar('alamat'),
    'jabatan' => $this->request->getVar('jabatan')
    ]);

    session()->setFlashdata('message', 'Tambah Data pegawai Berhasil');
    return redirect()->to('/pegawai');
 }

 public function edit($id)
    {
        $dataPegawai = $this->Pegawai->find($id);
            if (empty($dataPegawai)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data anggota Tidak ditemukan !');
        }
        $data['Pegawai'] = $dataPegawai;
        return view('pegawai/edit', $data);
 }
 
 public function update($id)
    {
        if (!$this->validate([
        'nama' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'tempat_lahir' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'tanggal_lahir' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'jenis_kelamin' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'no_telp' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'alamat' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'jabatan' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ]
        
        ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back();
        }
        $this->Pegawai->update($id, [
        'nama' => $this->request->getVar('nama'),
        'tempat_lahir' => $this->request->getVar('tempat_lahir'),
        'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
        'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        'no_telp' => $this->request->getVar('no_telp'),
        'alamat' => $this->request->getVar('alamat'),
        'jabatan' => $this->request->getVar('jabatan')
        ]);
        session()->setFlashdata('message', 'Update Data Pegawai Berhasil');
        return redirect()->to('/pegawai');
    }

 function delete($id)
    {
        $dataPegawai = $this->Pegawai->find($id);
        if (empty($dataPegawai)) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $this->Pegawai->delete($id);
        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
        return redirect()->to('/pegawai');
    }
}
