<main>
  <div class="container">
    <div class="card w-75 mb-3 mx-auto mt-5">
      <div class="card-body">
        <h3 class="text-center mt-1 mb-5">Pemesanan Lapangan Volly</h3>
        <div class="row">
          <div class="col-4 text-center">
            <h4>Isi Data</h4>
            <div class="mb-3 mt-4">
              <input type="text" class="focus-ring focus-ring-warning form-control form-control" name="nama" id="nama"
                placeholder="Nama Anda" autocomplete="off">
            </div>
            <div class="mb-3">
              <input type="text" class="focus-ring focus-ring-warning form-control form-control" name="telp" id="telp"
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
            <form action="" method="POST">
              <label for="booking-date">Tanggal Pemesanan:</label>
              <input type="date" id="booking-date" name="booking-date" required><br>

              <label for="booking-time">Waktu Pemesanan:</label>
              <input type="time" id="booking-time" name="booking-time" required><br>

              <button type="submit">Cek Ketersediaan</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>