<?php


namespace App\Models;

use CodeIgniter\Model;


class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_pesanan';
    protected $allowedFields = ['id_pelanggan', 'nama', 'kategori','no_telp','waktu_mulai','waktu_selesai','tanggal','harga','durasi','status'];


   
}