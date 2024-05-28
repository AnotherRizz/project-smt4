<?php

namespace App\Controllers;

use App\Models\EventModel;

class Event extends BaseController
{
    protected $eventModel;
    public function __construct(){
        $this->eventModel = new EventModel();
    }

    
// event start   
public function tambah(){
    $gambarUpload = $this->request->getFile('gambar');

    $gambarUpload->move('assets/img/uploads');
    $namaGambar = $gambarUpload->getName();

    $this->eventModel->save([
        'nama' =>$this->request->getVar('nama'),
        'gambar' =>$namaGambar
    ]);

    session()->setFlashdata('pesan', [
        'title' => 'Berhasil',
        'text' => 'Event Berhasil Ditambahkan',
        'icon' => 'success'
    ]);


    return redirect()->to('/admin/data');
}
public function delete($id_event)
    {
        $event = $this->eventModel->find($id_event);

        if (!$event) {
            return redirect()->to('/admin/data')->with('error', 'Data event tidak ditemukan');
        }

        $this->eventModel->delete($id_event);

        return redirect()->to('/admin/data')->with('pesan', 'Data lapangan berhasil dihapus');
    }
    public function ubah($id_event){
        $data =[
            'judul' =>'Ubah Data',
            'event' => $this->eventModel->find($id_event)
        ];
       

        echo view('../Views/admin/header',$data);
        echo view('../Views/admin/ubah_event',$data);
        echo view('../Views/admin/footer');
    }

    public function update(){
        $this->eventModel->save([
            'id_event' =>$this->request->getVar('id_event'),
            'nama' =>$this->request->getVar('nama'),
            'gambar' =>$this->request->getVar('gambar'),
        ]);

        session()->setFlashdata('pesan', [
            'title' => 'Berhasil',
            'text' => 'Data Berhasil DiUbah',
            'icon' => 'success'
        ]);


        return redirect()->to('/admin/data');
    }
}