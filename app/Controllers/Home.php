<?php

namespace App\Controllers;
use App\Models\LapanganModel;

class Home extends BaseController
{
    protected $lapanganModel;
    public function __construct(){

        $this->lapanganModel = new LapanganModel();
    }
    public function index()
    {
        $lapangan= $this->lapanganModel->findAll();
              // Cek apakah pengguna sudah login
              if (session()->get('logged_in')) {
                // Jika sudah login, ambil nama pelanggan dari session
               
                // Tampilkan view home dengan data nama pelanggan
                $data =[
                    'judul' => 'Home',
                    'lapangan' => $lapangan,
                    'namaPelanggan' => session()->get('pelanggan')
                   ];
                  
                    echo view('../Views/user/home',$data);
            } else{
                $data =[
                    'lapangan' => $lapangan,
                    'judul' => 'Home'
                   
                   ];
                  
                    echo view('../Views/user/home',$data);
                }
    }
    public function profile(){
       if( session()->get('logged_in')){
        $data =[
            'judul' => 'Profile',
            'namaPelanggan' => session()->get('pelanggan')
        ];
        echo view('../Views/user/profile',$data);
    }else{
        return redirect()->to('/auth');
    }
    }
    public function logout()
    {
        // Hapus semua data session yang terkait dengan login
        session()->remove('logged_in');
        session()->remove('pelanggan_id');
        session()->remove('pelanggan');
    
        // Redirect pengguna ke halaman utama atau halaman login
        return redirect()->to('/');
    }
    

}