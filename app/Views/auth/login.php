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

    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css'); ?>">

</head>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 position-relative overflow-hidden">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <?php if(session()->getFlashdata('pesan')) :?>
                        <div class="alert alert-success" role="alert" id="flashMessage">
                            <?= session()->getFlashdata('pesan');?>
                            
                        </div>


                        <?php endif ?>

                        <div class="col-8 z-2">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class=" mb-4">Halaman Login!!</h1>
                                </div>

                                <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                                    <div class="mb-3 mt-4">
                                        <input type="email"
                                            class="focus-ring focus-ring-warning form-control form-control" name="email"
                                            id="email" placeholder="Email Anda" autocomplete="off">
                                            <?php if(session()->getFlashdata('email')) :?>
                        <p class="text-danger fw-bold" style="font-size: 0.7rem;" id="flashMessage">
                            <?= session()->getFlashdata('email');?>
                        </p>
                        <?php endif ?>
                                    </div>
                                    <div class="mb-3">
                                    
                                        <input type="password"
                                            class="focus-ring focus-ring-warning form-control form-control"
                                            name="password" id="password" placeholder="Password" autocomplete="off">
                                            <?php if(session()->getFlashdata('password')) :?>
                        <p class="text-danger fw-bold" style="font-size: 0.7rem;" id="flashMessage">
                            <?= session()->getFlashdata('password');?>
                        </p>
                        <?php endif ?>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-sm  d-flex mx-auto">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registrasi'); ?>">Belum Punya Akun?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
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
<script src="<?= base_url('assets/js/auth.js') ?>"></script>
</body>

</html>