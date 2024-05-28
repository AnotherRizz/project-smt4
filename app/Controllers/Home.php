<?php

namespace App\Controllers;
use App\Models\LapanganModel;
use App\Models\OrderModel;
use App\Models\EventModel;


class Home extends BaseController
{
    protected $lapanganModel;
    protected $orderModel;
    protected $eventModel;
    public function __construct(){

        $this->lapanganModel = new LapanganModel();
        $this->orderModel = new OrderModel();
        $this->eventModel = new EventModel();
    }
    public function index()
    {
        $lapangan= $this->lapanganModel->findAll();
        $event= $this->eventModel->findAll();
              // Cek apakah pengguna sudah login
              if (session()->get('logged_in')) {
                // Jika sudah login, ambil nama pelanggan dari session
               
                // Tampilkan view home dengan data nama pelanggan
                $data =[
                    'judul' => 'Home',
                    'lapangan' => $lapangan,
                    'event' => $event,
                    'namaPelanggan' => session()->get('pelanggan')
                   ];
                  
                    echo view('../Views/user/home',$data,);
            } else{
                $data =[
                    'lapangan' => $lapangan,
                    'event' => $event,
                    'judul' => 'Home'
                   
                   ];
                  
                    echo view('../Views/user/home',$data);
                }
    }
    public function profile(){
       if( session()->get('logged_in')){
        
            // Jika sudah login, ambil nama pelanggan dan id pelanggan dari session
        $namaPelanggan = session()->get('pelanggan');
        $idPelanggan = session()->get('id_pelanggan');
        $orders = $this->orderModel->getOrdersByPelanggan($idPelanggan);
       
      
        $data =[
            'judul' => 'Profile',
            'namaPelanggan' => $namaPelanggan,
            'id_pelanggan'  => $idPelanggan,
            'order' => $orders
        ];
        echo view('../Views/user/profile',$data);
    }else{
        return redirect()->to('/auth');
    }
    }
   
    
    public function getOrderDetails($id_pesanan)
    {
        try {
            $orderModel = new OrderModel();
            $order = $orderModel->find($id_pesanan);

            if ($order) {
                // Log untuk debugging
                log_message('info', 'Order found: ' . json_encode($order));

                // Kembalikan detail pesanan sebagai view
                return view('../Views/user/order_details', ['order' => $order]);
            } else {
                log_message('error', 'Order not found for ID: ' . $id_pesanan);
                return 'Order not found';
            }
        } catch (\Exception $e) {
            // Log error
            log_message('error', 'Error in getOrderDetails: ' . $e->getMessage());
            return 'An error occurred';
        }
    }
    public function logout()
    {
        // Hapus semua data session yang terkait dengan login
        session()->remove('logged_in');
        session()->remove('pelanggan_id');
        session()->remove('pelanggan');
    
        // Redirect pengguna ke halaman utama atau halaman login
        return redirect()->to('/auth');
    }
    

}