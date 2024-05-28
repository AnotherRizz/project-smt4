<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Freeman&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/pesan.css'); ?>">
</head>

<body>
    <div class="comtainer" id="details">
        <h2>Nama : <span class="text-warning "><?= esc($order['nama']) ?></span> </h2>
        <h2>NO Telp : <span class="text-warning "> <?= esc($order['no_telp']) ?></span></h2>
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

                    <td><?= esc($order['kategori']) ?></td>
                    <td><?= esc($order['durasi']) ?> Menit</td>
                    <td>Rp.<?= esc($order['harga']) ?></td>
                    <td><?= esc($order['tanggal']) ?></td>
                    <td>
                        <?php if($order['status']==1 ): ?>
                        <button type="button" class="btn btn-sm btn-danger text-light " id="status">Belum Bayar</button>

                        <?php else: ?>

                        <button class="btn btn-sm btn-success text-light " id="status">Sudah Bayar</button>
                    </td>
                    <?php endif; ?>

                </tr>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>