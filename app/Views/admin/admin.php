<div class="col-10 ms-auto " id="admin">


    <h1 class="judul ms-3 my-4">Dashboard Admin</h1>
    <div class="d-flex justify-content-around">
        <div class="card bg-danger" style="width: 17rem; ">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col">

                        <h3><?= $jumlahUser; ?></h3>
                        <h5 class="card-title ">User Aktif</h5>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-users  text-dark"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="<?=base_url('/admin/user') ?>">selengkapnya <span><i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></span></a>
            </div>
        </div>
        <div class="card bg-warning" style="width: 17rem;">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col">
                        <h3><?= $jumlahOrder; ?></h3>
                        <h5 class="card-title">Penyewaan</h5>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-cart-shopping text-dark" ></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="">selengkapnya <span><i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></span></a>
            </div>
        </div>
        <div class="card " style="width: 17rem; background-color:#76ABAE;">
            <div class="card-body ">
                <div class="row text-center">
                    <div class="col">
                        <h3>5</h3>
                        <h5 class="card-title">Riwayat Transaksi</h5>
                    </div>
                    <div class="col">
                    <i class="fa-solid fa-file-lines text-dark" ></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="">selengkapnya <span><i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></span></a>
            </div>
        </div>


    </div>
</div>