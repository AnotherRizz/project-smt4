<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    public function voli()
    {
       $data =[
        'judul' => 'Pemesanan Lap Volly'
       ];
      
        echo view('../Views/pesan/form-pesan-voli',$data);
        echo view('../Views/pesan/template-pesan',$data);
    
       
    }
}