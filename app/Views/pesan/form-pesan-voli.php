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

  <link rel="stylesheet" href="<?= base_url('assets/css/pesan.css'); ?>">

</head>

<body>


<main>
  <div class="container">
    <div class="card w-75 mb-3 mx-auto mt-5">
      <div class="card-body">
        <h3 class="text-center mt-1 mb-5">Pemesanan <?= $lapangan['kategori'] ?> </h3>
        <div class="row">
          <div class="col-4 text-center">
            <form action="/pesan/order/<?= $id_pelanggan; ?>">
            <h4>Isi Data</h4>
            <div class="mb-3 mt-4">
              <input type="hidden" value="<?= $lapangan['kategori'] ?>" name="<?= $lapangan['kategori'] ?>">
              <input type="text" class="focus-ring focus-ring-warning form-control form-control" name="nama" id="nama"
                placeholder="Nama Anda" autocomplete="off">
            </div>
            <div class="mb-3">
              <input type="text" class="focus-ring focus-ring-warning form-control form-control" name="no_telp" id="telp"
                placeholder="NO Telp / Wa" autocomplete="off">
            </div>
          </div>
          <div class="col-8 text-center">
            <h4 class="mb-4">Pilihan Lapangan</h4>
            <button class="btn btn-sm border-warning " id="lap1">lapangan 1</button>
            <button class="btn btn-sm border-warning " id="lap2">lapangan 2</button>
            <div class="row mt-3">

              <img src="<?= base_url('assets/img/lapangan.png') ?>" style="width: 18rem;" class="mx-auto d-none"
                id="img1" alt="">
              <img src="<?= base_url('assets/img/bg.png') ?>" style="width: 18rem;" class="mx-auto d-none" id="img2"
                alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <!-- <form action="" method="POST"> -->
              
              <label for="booking-time1">Waktu Mulai:</label>
              <input type="time" id="booking-time1" name="waktu_mulai" required><br>
              <label for="booking-time2">Waktu Selesai:</label>
              <input type="time" id="booking-time2" name="waktu_selesai" required><br>
              <label for="booking-date">Tanggal Pemesanan:</label>
              <input type="date" id="booking-date" name="tanggal" required><br>

              <button type="submit" class="btn btn-primary btn-sm mt-4">Cek Ketersediaan</button>
              </form>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="<?= base_url('assets/js/pesan.js') ?>"></script>
</body>

</html>