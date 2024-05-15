<?php

namespace App\Controllers;
use App\Models\LapanganModel;
use App\Models\OrderModel;
use App\Models\PelangganModel;
use CodeIgniter\CLI\Console;

class Pesan extends BaseController

{
    protected $lapanganModel;
    protected $OrderModel;

    public function __construct(){
        $this->lapanganModel = new LapanganModel();
        $this->OrderModel = new OrderModel();
    

    }
    public function voli($id,)
    {
        $lapangan = $this->lapanganModel->find($id);
       

        if( session()->get('logged_in')){
            $namaPelanggan = session()->get('pelanggan');
            $idPelanggan = session()->get('id_pelanggan');
       $data =[
        'judul' => 'Pemesanan Lap Volly',
        'lapangan' => $lapangan,
        'namaPelanggan' => $namaPelanggan,
        'id_pelanggan' => $idPelanggan
        
        
       ];
      
        echo view('../Views/pesan/form-pesan-voli',$data);
        
        }else{
            return redirect()->to('/auth');
        }
       
    }

    public function order($id_pelanggan){
        $mulai = floatval($this->request->getVar('waktu_mulai'));
        $selesai = floatval($this->request->getVar('waktu_selesai'));
        $durasi = $selesai - $mulai ;
        $durasi_menit = floor($durasi );

        
       
        $this->OrderModel->save([
            'id_pelanggan' =>$id_pelanggan,
            'nama' =>$this->request->getVar('nama'),
            'no_telp' =>$this->request->getVar('no_telp'),
            'waktu_mulai' =>$mulai,
            'waktu_selesai' =>$selesai,
            'tanggal' =>$this->request->getVar('tanggal'),
            'durasi' =>$durasi_menit,
            'status' => '1'
        ]);
        
        return redirect()->to('/');
    }
}