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
          <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css'); ?>">

</head>

<body>

    <main>
        <div class="row g-0">
            <div class="col-2 position-fixed" id="nav">
                <nav class="navbar flex-column align-items-center justify-content-start border-end border-secondary ">
                    <a class="navbar-brand" href="#"><i class="fa-solid fa-volleyball p-1 fs-2"
                            style="color: #ffc100;"></i>Primagama</a>
                    <div class="navbar-link mt-5 g-0">
                        <div class="row mb-3 ms-2">
                            <a href="">Admin</a>

                        </div>
                        <div class="row " id="navigasi">
                            <button class="btn btn-md mb-3" id="2">

                                <a href="<?=base_url('/admin') ?>" class="d-flex align-items-end "><i
                                        class="fa-solid fa-shop mx-2 " style="color: #cccccc;"></i>Dashboard</a>
                            </button>
                            <button class="btn btn-md mb-3" id="1">

                                <a href="<?=base_url('admin/data') ?>" class="d-flex align-items-end "><i
                                        class="fa-solid fa-server mx-2 " style="color: #cccccc;"></i>Data</a>
                            </button>

                            <button class="btn btn-md mb-3" id="3">

                                <a href="<?=base_url('/admin/user') ?>" class="d-flex align-items-end "><i class="fa-solid fa-users mx-2"
                                        style="color: #cccccc;"></i>User</a>
                            </button>
                            <button class="btn btn-md " id="4">

                                <a href="<?=base_url('/admin/order') ?>" class="d-flex align-items-end "><i class="fa-solid fa-cart-shopping mx-2"
                                        style="color: #cccccc;"></i>Transaksi</a>
                            </button>
                        </div>
                        <div class="row mt-5 mb-3 ms-2">
                            <a href="">Acount</a>

                        </div>
                        <a href="<?=base_url('/admin/logout') ?>">
                            <button class="btn btn-sm btn-secondary fs-6 ms-3">Logout</button>
                        </a>






                    </div>
                </nav>

            </div>