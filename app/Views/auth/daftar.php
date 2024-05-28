<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Freeman&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css'); ?>">

</head>

<body>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row g-0">
                        <div class="col-md-8 p-5">
                            <div class="text-center mb-4">
                                <h1>Halaman Registrasi</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/daftar'); ?>">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" name="nama" id="nama"
                                        placeholder="Nama Anda" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                                        placeholder="Email Anda" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        id="password" placeholder="Password" autocomplete="off" required>
                                </div>
                                <button type="submit" class="btn btn-warning btn-lg w-100">Daftar</button>
                            </form>
                        </div>
                        <div class="col-md-4 d-none d-lg-none">
                        <img src="<?= base_url('assets/img/bg.png')?>" style="position: absolute; right: -10rem;"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="<?= base_url('assets/js/header.js') ?>"></script>

</body>
</html>
