<?php

namespace App\Controllers;
use App\Models\LapanganModel;
use App\Models\OrderModel;
use App\Models\GalleryModel;
use App\Models\PelangganModel;
use CodeIgniter\CLI\Console;
use Dompdf\Adapter\GD;

class Pesan extends BaseController

{
    protected $lapanganModel;
    protected $OrderModel;
    protected $galleryModel;

    public function __construct(){
        $this->lapanganModel = new LapanganModel();
        $this->OrderModel = new OrderModel();
        $this->galleryModel = new GalleryModel();
    

    }
    public function voli($id)
    {
        $lapangan = $this->lapanganModel->find($id);
        $order = $this->OrderModel->where('kategori', $lapangan['kategori'])->findAll();
        $gallery = $this->galleryModel->where('id_lapangan', $lapangan['id_lapangan'])->findAll();
       

        if( session()->get('logged_in')){
            $namaPelanggan = session()->get('pelanggan');
            $idPelanggan = session()->get('id_pelanggan');
       $data =[
        'judul' => 'Pemesanan Lap Volly',
        'lapangan' => $lapangan,
        'namaPelanggan' => $namaPelanggan,
        'id_pelanggan' => $idPelanggan,
        'gallery' => $gallery,
        'order' => $order
        
        
       ];
      
        echo view('../Views/pesan/form-pesan-voli',$data);
        
        }else{
            return redirect()->to('/auth');
        }
       
    }

    public function order($id_pelanggan) {
        $OrderModel = new OrderModel();
        
        // Ambil input dari form
        $nama = $this->request->getVar('nama');
        $no_telp = $this->request->getPost('no_telp');
        $tanggal = $this->request->getPost('tanggal');
        $waktu_mulai = $this->request->getPost('waktu_mulai');
        $waktu_selesai = $this->request->getPost('waktu_selesai');
        $kategori = $this->request->getPost('kategori');
    
        // Konversi waktu ke detik
        $mulai = strtotime("$tanggal $waktu_mulai");
        $selesai = strtotime("$tanggal $waktu_selesai");
    
        // Hitung durasi dalam menit
        $durasi_menit = ($selesai - $mulai) / 60;
    
        // Hitung harga (misal, harga per menit adalah 750)
        $harga_per_menit = 750;
        $total_harga = $durasi_menit * $harga_per_menit;
    
        // Cek apakah ada pesanan yang bentrok dengan waktu yang diberikan pada tanggal yang sama
        $cekOrder = $OrderModel->where('tanggal', $tanggal)
            ->groupStart()
                ->where('waktu_mulai <', $waktu_selesai)
                ->where('waktu_selesai >', $waktu_mulai)
            ->groupEnd()
            ->findAll();
    
        if (count($cekOrder) > 0) {
            // Jika ada bentrokan, kembalikan pesan error
            session()->setFlashdata('pesan', [
                'title' => 'Unavailable',
                'text' => 'Waktu yang Anda pilih sudah terpesan pada tanggal tersebut, coba jam lain.',
                'icon' => 'warning'
            ]);
            return redirect()->back();
        } else {
            // Jika tidak ada bentrokan, simpan pesanan
            $OrderModel->save([
                'id_pelanggan' => $id_pelanggan,
                'kategori' => $kategori,
                'nama' => $nama,
                'no_telp' => $no_telp,
                'waktu_mulai' => date('H:i', $mulai),
                'waktu_selesai' => date('H:i', $selesai),
                'tanggal' => $tanggal,
                'durasi' => $durasi_menit,
                'harga' => $total_harga,
                'status' => '1'
            ]);
            
            session()->setFlashdata('pesan', [
                'title' => 'Berhasil',
                'text' => 'Anda berhasil melakukan pesanan. Riwayat pesanan dapat dicek di profil.',
                'icon' => 'success'
            ]);
            
            return redirect()->to('/');
        }
    }
    

    public function cekOrder(){
      
        $mulai = $this->request->getVar('waktu_mulai');
        $selesai = $this->request->getVar('waktu_selesai');
        $tanggal = $this->request->getVar('tanggal');

     
       
    }
}