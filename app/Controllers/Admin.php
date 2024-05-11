<?php

namespace App\Controllers;

use App\Models\LapanganModel;

class Admin extends BaseController
{
    protected $lapanganModel;
    public function __construct(){

        $this->lapanganModel = new LapanganModel();
    }
   
    public function index()
    {
        $lapangan= $this->lapanganModel->findAll();

       $data =[
        'judul' => 'Admin',
        'lapangan' => $lapangan
       ];
       
        echo view('../Views/admin/admin',$data);
    
    }

    public function tambah(){
        $gambarUpload = $this->request->getFile('gambar');

        $gambarUpload->move('assets/img/uploads');
        $namabGambar = $gambarUpload->getName();

        $this->lapanganModel->save([
            'nama_lapangan' =>$this->request->getVar('nama_lapangan'),
            'gambar' =>$namabGambar,
            'kategori' =>$this->request->getVar('kategori')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');


        return redirect()->to('/admin');
    }

    public function delete($id_lapangan)
    {
        $lapangan = $this->lapanganModel->find($id_lapangan);

        if (!$lapangan) {
            return redirect()->to('/admin')->with('error', 'Data lapangan tidak ditemukan');
        }

        $this->lapanganModel->delete($id_lapangan);

        return redirect()->to('/admin')->with('pesan', 'Data lapangan berhasil dihapus');
    }

    public function ubah($id_lapangan){
        $data =[

            'lapangan' => $this->lapanganModel->find($id_lapangan)
        ];
       

        return view('../Views/admin/ubah',$data);
    }

    public function update(){
        $this->lapanganModel->save([
            'id_lapangan' =>$this->request->getVar('id_lapangan'),
            'nama_lapangan' =>$this->request->getVar('nama_lapangan'),
            'gambar' =>$this->request->getVar('gambar'),
            'lokasi' =>$this->request->getVar('lokasi')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Diubah');


        return redirect()->to('/admin');
    }
}