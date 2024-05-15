<div class="col-10 ms-auto " id="admin">
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Admin / Data Penyewaan <span><i class="fa-solid fa-shop mx-2"
                        style="color: #3D3B40;"></i></span></span>
        </div>
    </nav>

    <h1 class="judul ms-3 my-4">Data Penyewaan</h1>

    <section id="order">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id </th>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Tanggal</th>
                            <th>Durasi</th>
                            <th>Harga</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                             <?php foreach($order as $o) :?>
                        <tr>
                            <td><?= $o['id_pesanan']; ?></td>
                            <td><?= $o['kategori']; ?></td>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['no_telp']; ?></td>
                            <td><?= $o['waktu_mulai']; ?></td>
                            <td><?= $o['waktu_selesai']; ?></td>
                            <td><?= $o['tanggal']; ?></td>
                            <td><?= $o['durasi']; ?></td>
                            <td><?= $o['harga']; ?></td>
                            <td><button class="btn btn-sm btn-info text-light fw-semibold">Sudah Bayar</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</div>