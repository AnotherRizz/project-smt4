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

  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container ">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-volleyball p-1 fs-2" style="color: #ffc100;"></i>Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto gap-4" id="navLinks">
          <a class="nav-link " href="#home">Home</a>
          <a class="nav-link" href="#lapangan">Lapangan</a>
          <a class="nav-link" href="#tips">Panduan</a>

        </div>
        <i class="fa-solid fa-user fs-5" style="color: #ffc100;"></i>
        <p class="ms-2 mt-4 text-light"><?= $namaPelanggan ?></p>
      </div>
    </div>
  </nav>

  <main id="home">
    <div class="container-fluid text-center text-light ">
      <div class="row  d-flex align-items-center mt-[25px]">
        <div class="col">
          <h2>Primagama Sport Arena</h2>
        </div>

      </div>
      <div class="row">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, doloremque illo! Animi, at.
        </p>
      </div>
      <div class="row mx-auto">
        <div class="col">

          <button class="btn btn-md">
            Mulai
          </button>
        </div>
      </div>
    </div>
  </main>
<!-- pemesanan -->
  <section id="lapangan">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card overflow-hidden">
            <img src="<?= base_url('assets/img/voli.png') ?>" alt="">
            <div class="card-header z-2">
              Lapangan Volly
            </div>
            <div class="card-body">
              <h6 class="card-title">pilih jadwal main mu !</h6>
              <p>mulai dari Rp.60.000 / jam</p>
              <a href="<?= base_url('pesan/voli') ?>" class="btn ">pesan <i class="fa-solid fa-arrow-up-from-bracket px-2"
                  style="color: #ffffff;"></i></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card overflow-hidden">
            <img src="<?= base_url('assets/img/bola.png') ?>" alt="">
            <div class="card-header z-2">
              Lapangan Futsal
            </div>
            <div class="card-body">
              <h6 class="card-title">pilih jadwal main mu !</h6>
              <p>mulai dari Rp.60.000 / jam</p>
              <a href="" class="btn ">pesan <i class="fa-solid fa-arrow-up-from-bracket px-2"
                  style="color: #ffffff;"></i></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card overflow-hidden">
            <img src="<?= base_url('assets/img/bultang.png') ?>" alt="">
            <div class="card-header z-2">
              Lapangan Bulutangkis
            </div>
            <div class="card-body">
              <h6 class="card-title">pilih jadwal main mu !</h6>
              <p>mulai dari Rp.60.000 / jam</p>
              <a href="#" class="btn ">pesan <i class="fa-solid fa-arrow-up-from-bracket px-2"
                  style="color: #ffffff;"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- tips tips -->
  <section>
    <div class="container" id="tips">
      <div class="row gap-0">
        <div class="card">
          <h5 class="card-header">Tips Tips</h5>
          <div class="card-body">
            
            <div class="row">
              <div class="col-4">
                <div id="simple-list-example" class="d-flex flex-column gap-2 ">
                  <button class="btn border-warning btn-sm rounded pill" id="1">Cara Pesan</button>
                  <button class="btn border-warning btn-sm rounded pill" id="2">Cara Pembatalan</button>
                  <button class="btn border-warning btn-sm rounded pill" id="3">Ikuti Kami</button>

                </div>
              </div>
              <div class="col-8">
                <div class="item">

                  <div id="1" class="d-none nomor">
                    <ul>
                      <li>Pilih Lapangan (Bulutangkis , Futsal , Volly)</li>
                      <li>Tentukan jadwal, sesuaikan dengan ketersediaan jam</li>
                      <li>Isi data penyewa</li>
                      <li>Pilih metode Pembayaran</li>
                      <li>Kamu bisa melihat riwayat pemesanan di Profil </li>
                      <li>Cetak bukti pesanan saat datang </li>
                    </ul>
                  </div>
                  <div id="2" class="d-none nomor">
                    <ul>
                      <li>Cek di halaman profil</li>
                      <li>Pastikan kamu Belum mengirim bukti pembayaran</li>
                      <li>Pilih Tombol Pembatalan</li>
                      <li>Konfirmasi Pembatalan kamu</li>
                    </ul>
                  </div>
                  <div id="3" class="d-none nomor">tiga</div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="<?= base_url('assets/js/header.js') ?>"></script>
</body>

</html>