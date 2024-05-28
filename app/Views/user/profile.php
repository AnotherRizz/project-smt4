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
    <main id="profil">
        <div class="container mt-5">
            <div class="card" style="background-color: #EEEDEB;">
                <div class="card-header">
                    <a href="<?= base_url('/') ?>" class="btn btn-sm btn-secondary">
                        <i class="fa-solid fa-arrow-left mx-2" style="color: #ffffff;"></i>Home
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 col-12 text-center">
                            <img src="<?= base_url('assets/img/profil.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 col-12 mt-3 mt-md-5">
                            <h2 class="text-secondary">Selamat Datang <span class="text-warning"><?= $namaPelanggan ?></span></h2>
                            <a href="<?= base_url('home/logout') ?>" class="btn btn-sm btn-danger" id="status">Logout</a>
                        </div>
                        <div class="col-md-6 col-12 mt-4 mt-md-0">
                            <h2 class="text-center" style="color: #481E14;">Riwayat Pesanan</h2>
                            <?php foreach ($order as $o) : ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col ">
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th>Lapangan</th>
                                                        <th>Waktu</th>
                                                        <th>Harga</th>
                                                        <th>Tanggal</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td><?= esc($o['kategori']) ?></td>
                                                        <td><?= esc($o['durasi']) ?> Menit</td>
                                                        <td>Rp.<?= esc($o['harga']) ?></td>
                                                        <td><?= esc($o['tanggal']) ?></td>
                                                        <td>
                                                            <?php if($o['status']==1 ): ?>
                                                            <button type="button"
                                                                class="btn btn-sm btn-danger text-light "
                                                                id="status">Belum Bayar</button>

                                                            <?php else: ?>

                                                            <button class="btn btn-sm btn-success text-light "
                                                                id="status">Sudah Bayar</button>
                                                        </td>
                                                        <?php endif; ?>

                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>

                                    </div>
                                    <div class="row ms-auto">
                                        <button class="btn btn-secondary open-modal-btn "
                                            data-id="<?= $o['id_pesanan'] ?>" id="status">lihat detail
                                            <i class="fa-solid fa-arrow-up-from-bracket px-2"
                                                style="color: #ffffff;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- Modal HTML -->
                            <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Konten dinamis akan diisi di sini -->
                                            <div id="modalContent"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function () {
    $('.open-modal-btn').on('click', function () {
        var id_pesanan = $(this).data('id');

        // Menggunakan AJAX untuk mendapatkan data berdasarkan ID
        $.ajax({
            url: '<?= base_url('home/getOrderDetails') ?>/' + id_pesanan, // Menghapus spasi yang tidak diperlukan
            method: 'GET',
            success: function (response) {
                // Isi modal dengan data yang diterima
                $('#modalContent').html(response);

                // Tampilkan modal
                var orderModal = new bootstrap.Modal(document.getElementById('orderModal'), {});
                orderModal.show();
            },
            error: function () {
                alert('Failed to fetch data');
            }
        });
    });
});

    </script>
</body>

</html>