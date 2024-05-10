<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    public function voli()
    {
       $data =[
        'judul' => 'Pemesanan Lap Volly'
       ];
      
        echo view('../Views/modals/modal-voli',$data);
    
       
    }
}