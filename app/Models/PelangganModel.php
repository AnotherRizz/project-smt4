<?php


namespace App\Models;

use CodeIgniter\Model;


class PelangganModel extends Model
{
    protected $table = 'Pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $allowedFields = ['nama','email', 'password'];


    public function getPelangganByEmail($email)
    {
        // Query untuk mengambil data pelanggan berdasarkan email
        return $this->where('email', $email)->first();
    }
}