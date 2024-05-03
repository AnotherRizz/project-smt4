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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&display=swap"
        rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css'); ?>">

</head>

<body>


    <div class="container mt-3">
        <div class="card">
            <div class="card-header  bg-secondary text-light">
                Data Primagama
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari" aria-label="Recipient's username"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                </form>
                <!-- modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    + Tambah Data
                </button>
                <?php if(session()->getFlashdata('pesan')) :?>
                <div class="alert alert-info" role="alert" id="flashMessage">
                    <?= session()->getFlashdata('pesan');?>
                </div>

                <?php endif ?>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <?= csrf_field(); ?>
                            <div class="modal-body">
                                <!-- form tambah data -->
                                <form action="<?= base_url('admin/tambah'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama_lapangan" class="form-label">Nama Lapangan</label>
                                        <input type="text" class="form-control" id="nama_lapangan " name="nama_lapangan"
                                            required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" required
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasi" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi" required
                                            autocomplete="off">
                                    </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- tabel -->
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA LAPANGAN</th>
                            <th>GAMBAR</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php foreach($lapangan as $l) :?>
                        <tr>
                            <td><?= $l['id_lapangan']; ?></td>
                            <td><?= $l['nama_lapangan'] ?></td>
                            <td><img src="<?= base_url('assets/img/uploads/').$l['gambar']; ?>" width="100" alt=""></td>
                            <td><?= $l['lokasi'] ?></td>
                            <td>
                                <!-- modal ubah data -->
                                <!-- Button trigger modal -->
                                <a href="/admin/ubah/<?= $l['id_lapangan']; ?>">
                                <button type="button" class="btn border border-success btn-sm">
                                    <i class="fa-solid fa-pencil" style="color: #63E6BE;"></i>
                                </button>
                                </a>

                                <form action="/admin/delete/<?= $l['id_lapangan']; ?>" method="post">
                                    <button type="submit" class="btn border border-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Field Ini?!');">
                                        <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                                    </button>
                                </form>


                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



   

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
    setTimeout(function () {
        var flashMessage = document.getElementById('flashMessage');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 3000); // Pesan akan hilang setelah 5 detik (5000 milidetik)
</script>

</html>