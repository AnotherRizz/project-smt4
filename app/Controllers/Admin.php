<?php

namespace App\Controllers;

use App\Models\LapanganModel;
use App\Models\PelangganModel;
use App\Models\OrderModel;

class Admin extends BaseController
{
    protected $lapanganModel;
    protected $pelangganModel;
    protected $orderModel;
    public function __construct(){

        $this->lapanganModel = new LapanganModel();
        $this->pelangganModel = new PelangganModel();
        $this->orderModel = new OrderModel();
    }
   
    public function index()
    {
        $pelanggan= $this->pelangganModel->findAll();
        // menghitung isi dari field
        $userCount = $this->pelangganModel->countAllResults();
        $orderCount = $this->orderModel->countAllResults();

       $data =[
        'judul' => 'Admin',
        'user' => $pelanggan,
        'jumlahUser' => $userCount,
        'jumlahOrder' => $orderCount
       ];
       
        echo view('../Views/admin/header',$data);
        echo view('../Views/admin/admin',$data);
        echo view('../Views/admin/footer');
    
    }

    public function data(){
        $lapangan= $this->lapanganModel->findAll();
        $data =[
            'judul' => 'Data Admin',
            'lapangan' => $lapangan
           ];
           
            echo view('../Views/admin/header',$data);
            echo view('../Views/admin/data',$data);
            echo view('../Views/admin/footer');
    }
    public function user(){
        $user= $this->pelangganModel->findAll();
        $data =[
            'judul' => 'Data User',
            'users' => $user
           ];
           
            echo view('../Views/admin/header',$data);
            echo view('../Views/admin/user',$data);
            echo view('../Views/admin/footer');
    }
    public function order(){
        $order= $this->orderModel->findAll();
        $data =[
            'judul' => 'Data Order',
            'order' => $order
           ];
           
            echo view('../Views/admin/header',$data);
            echo view('../Views/admin/order',$data);
            echo view('../Views/admin/footer');
    }






    public function tambah(){
        $gambarUpload = $this->request->getFile('gambar');

        $gambarUpload->move('assets/img/uploads');
        $namabGambar = $gambarUpload->getName();

        $this->lapanganModel->save([
            'nama_lapangan' =>$this->request->getVar('nama_lapangan'),
            'gambar' =>$namabGambar,
            'kategori' =>$this->request->getVar('kategori'),
            'ikon_gambar' =>$this->request->getVar('ikon_gambar')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');


        return redirect()->to('/admin/data');
    }

    public function delete($id_lapangan)
    {
        $lapangan = $this->lapanganModel->find($id_lapangan);

        if (!$lapangan) {
            return redirect()->to('/admin/data')->with('error', 'Data lapangan tidak ditemukan');
        }

        $this->lapanganModel->delete($id_lapangan);

        return redirect()->to('/admin/data')->with('pesan', 'Data lapangan berhasil dihapus');
    }

    public function ubah($id_lapangan){
        $data =[
            'judul' =>'Ubah Data',
            'lapangan' => $this->lapanganModel->find($id_lapangan)
        ];
       

        echo view('../Views/admin/header',$data);
        echo view('../Views/admin/ubah',$data);
        echo view('../Views/admin/footer');
    }

    public function update(){
        $this->lapanganModel->save([
            'id_lapangan' =>$this->request->getVar('id_lapangan'),
            'nama_lapangan' =>$this->request->getVar('nama_lapangan'),
            'kategori' =>$this->request->getVar('kategori'),
            'gambar' =>$this->request->getVar('gambar'),
            'ikon_gambar' =>$this->request->getVar('ikon_gambar')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Diubah');


        return redirect()->to('/admin/data');
    }
}