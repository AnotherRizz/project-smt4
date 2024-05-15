     <div class="col-10 ms-auto" id="data">
         <nav class="navbar bg-info">
             <div class="container-fluid">
                 <span class="navbar-brand mb-0 h1">Admin / Data Lapangan <span><i class="fa-solid fa-users mx-2"
                             style="color: #3D3B40;"></i></span></span>
             </div>
         </nav>
         <div class="container mt-3">
             <div class="card">
                 <div class="card-header  bg-secondary text-light">
                     Data Primagama
                 </div>
                 <div class="card-body">
                    
                     <!-- modal -->
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                         data-bs-target="#exampleModal">
                         + Tambah Data
                     </button>
                     <?php if(session()->getFlashdata('pesan')) :?>
                     <div class="alert alert-info" role="alert" id="flashMessage">
                         <?= session()->getFlashdata('pesan');?>
                     </div>

                     <?php endif ?>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                     <!-- tabel -->
                     <table class="table mt-2">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>NAMA LAPANGAN</th>
                                 <th>GAMBAR</th>
                                 <th>KATEGORI</th>
                                 <th>AKSI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $i=1; ?>
                             <?php foreach($lapangan as $l) :?>
                             <tr>
                                 <td><?= $l['id_lapangan']; ?></td>
                                 <td><?= $l['nama_lapangan'] ?></td>
                                 <td><img src="<?= base_url('assets/img/uploads/').$l['gambar']; ?>" width="100" alt="">
                                 </td>
                                 <td><?= $l['kategori'] ?></td>
                                 <td>
                                     <!-- modal ubah data -->
                                     <!-- Button trigger modal -->
                                     <a href="/admin/ubah/<?= $l['id_lapangan']; ?>">
                                         <button type="button" class="btn border border-success btn-sm">
                                             <i class="fa-solid fa-pencil" style="color: #63E6BE;"></i>
                                         </button>
                                     </a>

                                     <form action="/admin/delete/<?= $l['id_lapangan']; ?>" method="post">
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