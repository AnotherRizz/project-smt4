<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use CodeIgniter\CLI\Console;

class Auth extends BaseController
{
    protected $pelangganModel;
    public function __construct(){

        $this->pelangganModel = new PelangganModel();
    }
    function index(){
        $data =[
            'judul' => 'Login',
           
           ];
        echo view('../views/auth/login',$data);
    }


    public function registrasi(){
        $data =[
            'judul' => 'Daftar',
           
           ];
        echo view('../views/auth/daftar',$data);
    }

    public function daftar()
    {
        // Mendapatkan input dari form registrasi
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
      
        // Memeriksa jika semua input tidak kosong
        if (!empty($nama) && !empty($email) && !empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
    
            // Simpan data pelanggan ke dalam basis data
            $this->pelangganModel->save([
                'nama' => $nama,
                'email' => $email,
                'password' => $hashedPassword, // Gunakan kata sandi yang telah di-hash
            ]);
    
            session()->setFlashdata('pesan', 'Akun Berhasil Dibuat');
            return redirect()->to('/auth');
        } else {
            session()->setFlashdata('pesan', 'Mohon lengkapi semua input');
            return redirect()->back()->withInput();
        }
    }
    
    public function login()
    {
        // Mendapatkan input dari form login
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
      
        // Mengambil data pengguna dari basis data berdasarkan alamat email
        $pelanggan = $this->pelangganModel->where('email', $email)->first();
    
        // Memeriksa apakah pengguna ditemukan
        if ($pelanggan) {
            // Memeriksa apakah kata sandi cocok
            if (password_verify($password, $pelanggan['password'])) {
                // Jika kata sandi cocok, maka login berhasil
                // Lakukan sesuatu seperti menyimpan informasi pengguna ke sesi atau cookie
                // Anda juga bisa mengarahkan pengguna ke halaman setelah login
                session()->set('logged_in', true);
                session()->set('id_pelanggan', $pelanggan['id_pelanggan']);
                session()->set('pelanggan', $pelanggan['nama']);

                    // Mendapatkan id_pelanggan ke dalam variabel
    

    
           
                // Redirect ke halaman setelah login
                return redirect()->to('/',);
            } else {
                // Jika kata sandi tidak cocok, tampilkan pesan kesalahan
                session()->setFlashdata('password', 'Password salah');
                return redirect()->back()->withInput();
            }
        } else {
            // Jika pengguna tidak ditemukan, tampilkan pesan kesalahan
            session()->setFlashdata('email', 'Email tidak ditemukan');
            return redirect()->back()->withInput();
        }
    }
    

}