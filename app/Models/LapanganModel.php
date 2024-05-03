<?php


namespace App\Models;

use CodeIgniter\Model;


class LapanganModel extends Model
{
    protected $table = 'lapangan';
    protected $primaryKey = 'id_lapangan';
    protected $allowedFields = ['nama_lapangan', 'gambar', 'lokasi'];

    public function deleteLapangan($id_lapangan)
{
    return $this->db->table('lapangan')->delete(['id_lapangan' => $id_lapangan]);
}

   
}
