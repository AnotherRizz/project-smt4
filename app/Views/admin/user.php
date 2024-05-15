<div class="col-10 ms-auto " id="user">
<nav class="navbar bg-info">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Admin / Data User <span><i class="fa-solid fa-users mx-2"style="color: #3D3B40;"></i></span></span>
  </div>
</nav>
  <section class="p-4">
  <div class="card my-3 ">
  <div class="card-body ">
  <table class="table table-hover">
    <thead >
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email User</th>
            <th>Status</th>
        </tr>
    </thead>
    
    <tbody>
    <?php $i=1; ?>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><button class="btn btn-sm btn-success">Aktif</button></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
    
    </table>
  </div>
</div>
  </section>  

    
</div>