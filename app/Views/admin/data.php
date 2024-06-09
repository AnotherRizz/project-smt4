     <div class="col-10 ms-auto" id="data">

         <div class="container mt-3">
             <div class="card border-secondary rounded-0">
                 <div class="card-header rounded-0 bg-secondary text-light">
                     Data Primagama
                 </div>
                 <div class="card-body">

                     <!-- modal -->
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                         data-bs-target="#exampleModal1">
                         + Tambah Data
                     </button>



                     <!-- Modal tambah data -->
                     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <?= csrf_field(); ?>
                                 <div class="modal-body">
                                     <!-- form tambah data -->
                                     <form action="<?= base_url('admin/tambah'); ?>" method="post"
                                         enctype="multipart/form-data">
                                         <div class="mb-3">
                                             <label for="nama_lapangan" class="form-label">Nama Lapangan</label>
                                             <input type="text" class="form-control" id="nama_lapangan "
                                                 name="nama_lapangan" required autocomplete="off">
                                         </div>
                                         <div class="mb-3">
                                             <label for="gambar" class="form-label">Gambar</label>
                                             <input type="file" class="form-control" id="gambar" name="gambar" required
                                                 autocomplete="off">
                                         </div>
                                         <div class="mb-3">
                                             <label for="kategori" class="form-label">Kategori</label>
                                             <input type="text" class="form-control" id="kategori" name="kategori"
                                                 required autocomplete="off">
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Batal</button>
                                     <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <!-- Modal tambah event -->
                     <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Event</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <?= csrf_field(); ?>
                                 <div class="modal-body">
                                     <!-- form tambah event -->
                                     <form action="<?= base_url('event/tambah'); ?>" method="post"
                                         enctype="multipart/form-data">
                                         <div class="mb-3">
                                             <label for="nama" class="form-label">Nama Event</label>
                                             <input type="text" class="form-control" id="nama " name="nama" required
                                                 autocomplete="off">
                                         </div>
                                         <div class="mb-3">
                                             <label for="gambar" class="form-label">Gambar</label>
                                             <input type="file" class="form-control" id="gambar" name="gambar" required
                                                 autocomplete="off">
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Batal</button>
                                     <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <!-- Modal tambah gallery -->
                     <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Gallery</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <?= csrf_field(); ?>
                                 <div class="modal-body">
                                     <!-- form tambah gallery -->
                                     <form action="<?= base_url('gallery/tambah'); ?>" method="post"
                                         enctype="multipart/form-data">
                                         <input type="hidden" value="" id="valueLap" name="id_lapangan">
                                         <div class="mb-3">
                                             <label for="gambar" class="form-label">Gambar</label>
                                             <input type="file" class="form-control" id="gambar" name="gambar" required
                                                 autocomplete="off">
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Batal</button>
                                     <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <!-- tabel -->
                     <table class="table mt-2 border ">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>NAMA LAPANGAN</th>
                                 <th>GAMBAR</th>
                                 <th>KATEGORI</th>
                                 <th>GALLERY</th>
                                 <th>AKSI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $i=1; ?>
                             <?php foreach($lapangan as $l) :?>
                             <tr>
                                 <td><?= $l['id_lapangan']; ?></td>
                                 <td><?= $l['nama_lapangan'] ?></td>
                                 <td><img src="<?= base_url('assets/img/uploads/').$l['gambar']; ?>" width="75" alt="">
                                 </td>
                                 <td><?= $l['kategori'] ?></td>
                                 <td>
                                     <button class="btn btn-sm btn-success" value="<?= $l['id_lapangan']; ?>"
                                         id="tambahGallery" data-bs-toggle="modal"
                                         data-bs-target="#exampleModal3">Tambah</button>
                                 </td>
                                 <td class="">
                                     <!-- modal ubah data -->
                                     <!-- Button trigger modal -->
                                     <a href="/admin/ubah/<?= $l['id_lapangan']; ?>">
                                         <button type="button" class="btn border btn-warning btn-sm ">
                                             UBAH <i class="fa-solid fa-pencil px-1" style="color: #ffff;"></i>
                                         </button>
                                     </a>

                                     <form action="/admin/delete/<?= $l['id_lapangan']; ?>" method="post">
                                         <button type="submit" class="btn border btn-danger btn-sm"
                                             onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Field Ini?!');">
                                             HAPUS <i class="fa-solid fa-trash" style="color: #ffff;"></i>
                                         </button>
                                     </form>


                                 </td>
                             </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>

                 </div>
             </div>
             <!-- event tabel -->
             <div class="card mt-5 border-secondary rounded-0">
                 <div class="card-header  bg-secondary rounded-0 text-light">
                     Data Event
                 </div>
                 <div class="card-body">
                     <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                         data-bs-target="#exampleModal1">
                         + Tambah Event
                     </button>

                     <table class="table mt-2  border">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>GAMBAR</th>
                                 <th>NAMA EVENT</th>
                                 <th>OPSI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php foreach($event as $e) :?>
                             <tr>
                                 <td><?= $e['id_event']; ?></td>
                                 <td><img src="<?= base_url('assets/img/uploads/').$e['gambar']; ?>" width="75" alt="">
                                 </td>
                                 <td><?= $e['nama']; ?></td>
                                 <td>
                                     <a href="/event/ubah/<?= $e['id_event']; ?>">
                                         <button type="button" class="btn border border-success btn-sm">
                                             <i class="fa-solid fa-pencil" style="color: #63E6BE;"></i>
                                         </button>
                                     </a>

                                     <form action="/event/delete/<?= $e['id_event']; ?>" method="post">
                                         <button type="submit" class="btn border border-danger btn-sm"
                                             onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Field Ini?!');">
                                             <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                                         </button>
                                     </form>
                                 </td>
                             </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>