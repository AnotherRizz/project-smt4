<div class="col-10 ms-auto " id="order">
    <nav class="navbar bg-info">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Admin / Data Penyewaan <span><i class="fa-solid fa-shop mx-2"
                        style="color: #3D3B40;"></i></span></span>
        </div>
    </nav>

    <h1 class="judul ms-3 my-2">Data Penyewaan</h1>
   

    <section id="order">
        <div class="card">
            <div class="card-body">
                <table class="table border rounded">
                    <thead class="table-dark mb-5">
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
                        <?php $i =1 ;?>
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
                            <?php if($o['status']==1 ): ?>

                            <td>
                                <form action="<?= base_url('admin/status/' . $o['id_pesanan']) ?>" method="post"
                                    class="update-status-form">
                                    <button type="button"
                                        class="btn btn-sm btn-danger text-light fw-semibold update-status-btn"
                                        data-id="<?= $o['id_pesanan'] ?>">Belum Bayar</button>
                                </form>
                            </td>
                            <?php else: ?>
                            <td>
                                <button class="btn btn-sm btn-success text-light fw-semibold">Sudah Bayar</button>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</div>