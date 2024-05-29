<div class="col-10 ms-auto " id="order">


    <h1 class="judul ms-3 my-2">Data Penyewaan </h1>


    <section id="order">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Bulan <form action="<?= site_url('admin/order') ?>" method="post" id="monthForm">
                        <select class="border-0" name="month" id="inputGroupSelect01"
                            onchange="document.getElementById('monthForm').submit()">
                            <option value="01" <?= set_select('month', '01', ($selectedMonth == '01')) ?>>Januari</option>
                            <option value="02" <?= set_select('month', '02', ($selectedMonth == '02')) ?>>Februari</option>
                            <option value="03" <?= set_select('month', '03', ($selectedMonth == '03')) ?>>Maret</option>
                            <option value="04" <?= set_select('month', '04', ($selectedMonth == '04')) ?>>April</option>
                            <option value="05" <?= set_select('month', '05', ($selectedMonth == '05')) ?>>Mei</option>
                            <option value="06" <?= set_select('month', '06', ($selectedMonth == '06')) ?>>Juni</option>
                            <option value="07" <?= set_select('month', '07', ($selectedMonth == '07')) ?>>Juli</option>
                            <option value="08" <?= set_select('month', '08', ($selectedMonth == '08')) ?>>Agustus</option>
                            <option value="09" <?= set_select('month', '09', ($selectedMonth == '09')) ?>>September</option>
                            <option value="10" <?= set_select('month', '10', ($selectedMonth == '10')) ?>>Oktober</option>
                            <option value="11" <?= set_select('month', '11', ($selectedMonth == '11')) ?>>November</option>
                            <option value="12" <?= set_select('month', '12', ($selectedMonth == '12')) ?>>Desember</option>
                        </select>
                    </form>
                </h1>
                <table class="table border table-hover">
                    <thead class="table-secondary mb-5">
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
                        <?php if (!empty($order)): ?>
                        <?php foreach ($order as $o): ?>
                        <tr>
                            <td><?= esc($o['id_pesanan']); ?></td>
                            <td><?= esc($o['kategori']); ?></td>
                            <td><?= esc($o['nama']); ?></td>
                            <td><?= esc($o['no_telp']); ?></td>
                            <td><?= esc($o['waktu_mulai']); ?></td>
                            <td><?= esc($o['waktu_selesai']); ?></td>
                            <td><?= esc($o['tanggal']); ?></td>
                            <td><?= esc($o['durasi']); ?></td>
                            <td><?= esc($o['harga']); ?></td>
                            <td>
                                <?php if ($o['status'] == 1): ?>
                                <form action="<?= base_url('admin/status/' . $o['id_pesanan']) ?>" method="post"
                                    class="update-status-form">
                                    <button type="button"
                                        class="btn btn-sm btn-danger text-light fw-semibold update-status-btn"
                                        data-id="<?= esc($o['id_pesanan']) ?>">Belum Bayar</button>
                                </form>
                                <?php else: ?>
                                <button class="btn btn-sm btn-success text-light fw-semibold">Sudah Bayar</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="10" class="text-center mt-5 fs-4">Tidak ada data untuk bulan ini.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>


                </table>
            </div>
        </div>
    </section>


</div>