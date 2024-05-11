<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
              // Cek apakah pengguna sudah login
              if (session()->get('logged_in')) {
                // Jika sudah login, ambil nama pelanggan dari session
               
                // Tampilkan view home dengan data nama pelanggan
                $data =[
                    'judul' => 'Home',
                    'namaPelanggan' => session()->get('pelanggan')
                   ];
                  
                    echo view('../Views/user/home',$data);
            } else{
                $data =[
                    'judul' => 'Home'
                   
                   ];
                  
                    echo view('../Views/user/home',$data);
            }
     
    
       
    }
}