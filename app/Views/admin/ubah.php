<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5" style="width: 30rem;">
            <img src="<?= base_url('assets/img/bg-main.png'); ?>" class="card-img-top w-25 mx-auto" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Lapangan <?= $lapangan['nama_lapangan'] ?></h5>
                <form action="/admin/update" method="post">
                    <input type="hidden" name="id_lapangan" value="<?= $lapangan['id_lapangan'] ?>">
                    <div class="mb-3">
                        <label for="nama_lapangan" class="form-label">Nama Lapangan</label>
                        <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" required
                            autocomplete="off" value="<?= $lapangan['nama_lapangan'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required autocomplete="off"
                            value="<?= $lapangan['gambar'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" required autocomplete="off"
                            value="<?= $lapangan['kategori'] ?>">
                    </div>
                    <button type="submit" class="btn border border-danger btn-sm">
                        Ubah
                    </button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>