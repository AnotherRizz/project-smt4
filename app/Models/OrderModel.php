<?php


namespace App\Models;

use CodeIgniter\Model;


class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_pesanan';
    protected $allowedFields = ['id_pelanggan', 'nama', 'kategori','no_telp','waktu_mulai','waktu_selesai','tanggal','harga','durasi','status'];


   public function getItem(){
    return $this->orderBy('id_pesanan', 'DESC')->findAll();
   }
   public function getOrdersByPelanggan($idPelanggan)
    {
        return $this->where('id_pelanggan', $idPelanggan)
                    ->orderBy('tanggal', 'DESC') // Urutkan berdasarkan kolom created_at secara descending
                    ->findAll();
    }
}