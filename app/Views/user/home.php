<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Freeman&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&display=swap"
    rel="stylesheet">

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand  " href="#"><i class="fa-solid fa-volleyball p-1 fs-2"
          style="color: #ffc100;"></i>Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: white;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto gap-4" id="navLinks">
          <a class="nav-link " href="#home">Home</a>
          <a class="nav-link " href="#event">Event</a>
          <a class="nav-link " href="#tips">Panduan</a>
        </div>
        <a href="<?= base_url('home/profile') ?>"><i class="fa-solid fa-user fs-5" style="color: #ffc100;"></i></a>
      </div>
    </div>
  </nav>

  <main id="home" class="py-5">
    <div class="container-fluid text-center text-light">
      <div class="row align-items-center ">
        <div class="col mt-5">
          <h2>Primagama Sport Arena</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>Pesan Jadwal Lapangan kini lebih mudah</p>
        </div>
      </div>

    </div>
  </main>

  <!-- Pemesanan -->
  <section id="lapangan">
    <div class="container">
      <div class="row">
        <?php foreach ($lapangan as $lap) : ?>
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card overflow-hidden">
            <img src="<?= base_url('assets/img/').$lap['ikon_gambar']; ?>" alt="" class="img-fluid">
            <div class="card-header z-2">
              <?= $lap['kategori'] ?>
            </div>
            <div class="card-body">
              <h6 class="card-title">Pilih jadwal main mu!</h6>
              <p>Mulai dari Rp 45.000 / jam</p>
              <a href="pesan/voli/<?= $lap['id_lapangan']; ?>" class="btn">Pesan <i
                  class="fa-solid fa-arrow-up-from-bracket px-2" style="color: #ffffff;"></i></a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

 
  <!-- event -->
  <section id="event">
  <div class="container my-4">
    <h4 class="title mt-5">Event Tournament</h4>
    <div class="row g-3">
        
        <div class="col-6 col-md-4 col-lg-3 img-container" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= base_url('assets/img/event/poster1.jpg') ?>" class="img-fluid rounded" alt="Poster 2">
           
        </div>
        <div class="col-6 col-md-4 col-lg-3 img-container" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= base_url('assets/img/event/poster2.jpg') ?>" class="img-fluid rounded" alt="Poster 2">
           
        </div>
        <div class="col-6 col-md-4 col-lg-3 img-container"  data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= base_url('assets/img/event/poster3.jpg') ?>"  class="img-fluid rounded" alt="Poster 3">
           
        </div>
        <div class="col-6 col-md-4 col-lg-3 img-container"  data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= base_url('assets/img/event/poster4.jpg') ?>"  class="img-fluid rounded" alt="Poster 4">
           
        </div>
        <div class="col-6 col-md-4 col-lg-3 img-container"  data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= base_url('assets/img/event/poster5.jpg') ?>"  class="img-fluid rounded" alt="Poster 5">
           
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <img src="" class="img-fluid rounded" id="modal-img" alt="">
    </div>
  </div>
</div>



  </section>

   <!-- Tips Tips -->
   <section id="tips">
    <div class="container-fluid">
      <div class="row gap-0 ">   
              <div class="col-md-6 col-sm-12 mb-3">
                <div id="simple-list-example" class="d-flex flex-column gap-2">
                  <button class="btn btn-outline-secondary btn-sm rounded-pill text-light w-75 mx-auto" id="1">Cara Pesan</button>
                  <button class="btn btn-outline-secondary btn-sm rounded-pill text-light w-75 mx-auto" id="2">Cara Pembatalan</button>
                  <button class="btn btn-outline-secondary btn-sm rounded-pill text-light w-75 mx-auto" id="3">Ikuti Kami</button>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="item">
                  <div id="1" class="d-none nomor">
                    <ul>
                      <li>Pilih Lapangan (Bulutangkis, Futsal, Volly)</li>
                      <li>Tentukan jadwal, sesuaikan dengan ketersediaan jam</li>
                      <li>Isi data penyewa</li>
                      <li>Pilih metode Pembayaran</li>
                      <li>Kamu bisa melihat riwayat pemesanan di Profil</li>
                      <li>Cetak bukti pesanan saat datang</li>
                    </ul>
                  </div>
                  <div id="2" class="d-none nomor">
                    <ul>
                      <li>Cek di halaman profil</li>
                      <li>Pastikan kamu belum mengirim bukti pembayaran</li>
                      <li>Pilih Tombol Pembatalan</li>
                      <li>Konfirmasi Pembatalan kamu</li>
                    </ul>
                  </div>
                  <div id="3" class="d-none nomor">Tiga</div>
                </div>
              </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url('assets/js/header.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php if (session()->getFlashdata('pesan')): ?>
            const flashdata = <?= json_encode(session()->getFlashdata('pesan')) ?>;
            Swal.fire({
                title: flashdata.title,
                text: flashdata.text,
                icon: flashdata.icon,
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    });
</script>


</body>

</html>