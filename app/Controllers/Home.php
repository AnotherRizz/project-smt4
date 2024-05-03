<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $data =[
        'judul' => 'Home'
       ];
      
        echo view('../Views/layout/template_header',$data);
        echo view('../Views/user/home');
    
       
    }
}