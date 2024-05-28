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
      <div class="row g-5 mt-4">
        <div class="col-md-6">
          <div class="card mb-3 mx-auto">
            <div class="card-body">
              <h3 class="text-center mt-1 mb-5">Pemesanan <?= $lapangan['kategori'] ?> </h3>
              <form action="/pesan/order/<?= $id_pelanggan; ?>" method="post">
                <div class="mb-3 mt-4">
                  <input type="hidden" value="<?= $lapangan['kategori'] ?>" name="kategori">
                  <input type="text" class="form-control border-info" name="nama" id="nama" placeholder="Nama Anda"
                    autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <input type="number" class="form-control border-info" name="no_telp" id="telp"
                    placeholder="NO Telp / Wa" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="booking-time1">Waktu Mulai: <span>min jam 08.00</span></label>
                  <input type="time" id="booking-time1" class="form-control border-info" name="waktu_mulai"min="08:00" max="22:00" required>
                </div>
                <div class="mb-3">
                  <label for="booking-time2">Waktu Selesai: <span>max jam 22.00</span></label><br>
                  <input type="time" id="booking-time2" class="form-control border-info" name="waktu_selesai" min="08:00" max="22:00" required>
                </div>
                <div class="mb-3">
                  <label for="booking-date">Tanggal Pemesanan:</label>
                  <input type="date" id="booking-date" class="form-control border-info" name="tanggal" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm mt-4 mb-2 text-center">Pesan</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mx-auto">
            <div class="card-body">
            <h4 class="mb-4">Jadwal Booking <?= $lapangan['kategori'] ?>
                <select class="form-select" id="inputGroupSelect01">
                  <option value="1">Hari Ini</option>
                  <option value="2">Besok</option>
                  <option value="3">Lusa</option>
                </select>
              </h4>
            <div id="booking-schedule">
                <?php foreach ($order as $o) : ?>
                  <div class="row mb-3 booking-item" data-date="<?= $o['tanggal'] ?>">
                    <button class="btn btn-sm btn-primary fs-6 w-100 rounded-pill"><?= $o['waktu_mulai'] ?>.00 -
                      <?= $o['waktu_selesai'] ?>.00  <?= $o['tanggal'] ?></button>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/js/pesan.js') ?>"></script>
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
