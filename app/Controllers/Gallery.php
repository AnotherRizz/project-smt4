<?php

namespace App\Controllers;

use App\Models\GalleryModel;

class Gallery extends BaseController
{
    protected $galleryModel;
    public function __construct(){
        $this->galleryModel = new GalleryModel();
    }

    public function tambah(){
        $gambarUpload = $this->request->getFile('gambar');
    
        $gambarUpload->move('assets/img/uploads');
        $namaGambar = $gambarUpload->getName();
    
        $this->galleryModel->save([
            'id_lapangan' =>$this->request->getVar('id_lapangan'),
            'gambar' =>$namaGambar
        ]);
    
        session()->setFlashdata('pesan', [
            'title' => 'Berhasil',
            'text' => 'Event Berhasil Ditambahkan',
            'icon' => 'success'
        ]);
    
    
        return redirect()->to('/admin/data');
    }

}