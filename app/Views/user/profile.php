<?php

use CodeIgniter\Database\BaseUtils;
?>
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
            <div class="card " style="background-color: #EEEDEB;">
                <div class="card-header flex">
                    <a href="<?= base_url('/') ?>" class="text-left"><button class="btn btn-sm btn-secondary"><i class="fa-solid fa-arrow-left mx-2" style="color: #ffffff;"></i>home</button></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url('assets/img/profil.png') ?>" style="width: 10rem;" alt="">
                        </div>
                        <div class="col-4 text-left mt-5">
                            <h2>Selamat Datang <span class="text-warning"><?= $namaPelanggan ?></span> </h2>
                            <a href="<?=base_url('home/logout') ?>"><button class="btn btn-sm btn-secondary">logout</button></a>

                        </div>
                        <div class="col-6">
                            <h2 class="text-center">Riwayat Pesanan</h2>
                            <div class="card  mb-3">
                                <div class="card-body">
                                   <table class="table border-none ">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>: Risqi Japana</td>
                                        </tr>
                                        <tr>
                                            <td>No Telp</td>
                                            <td>: 087743432218</td>
                                        </tr>
                                        <tr>
                                            <td>Lapangan</td>
                                            <td>: Lapangan Futsal</td>
                                        </tr>
                                        <tr>
                                            <td>Waktu</td>
                                            <td>: 2 Jam</td>
                                        </tr>
                                        <tr>
                                            <td>ID Pesanan</td>
                                            <td>: bcag86749</td>
                                        </tr>
                                    </tbody>
                                   </table>
                                   <button class="btn btn-danger">  <i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                   <button class="btn btn-primary"><i class="fa-regular fa-file" style="color: #ffffff;"></i></button>
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
</body>

</html>