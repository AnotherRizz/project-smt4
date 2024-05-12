<?php

namespace App\Controllers;
use App\Models\LapanganModel;

class Pesan extends BaseController

{
    protected $lapanganModel;
    public function __construct(){

        $this->lapanganModel = new LapanganModel();
    }
    public function voli($id)
    {
        $lapangan = $this->lapanganModel->find($id);

        if( session()->get('logged_in')){
       $data =[
        'judul' => 'Pemesanan Lap Volly',
        'lapangan' => $lapangan,
        'namaPelanggan' => session()->get('pelanggan')
       ];
      
        echo view('../Views/pesan/form-pesan-voli',$data);
        
        }else{
            return redirect()->to('/auth');
        }
       
    }
}