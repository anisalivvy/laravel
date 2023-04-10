<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?=$data["judul"];?></title>
</head>

<body>
    <h1>Halaman Utama User</h1>
</body>
</html> -->

<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>


    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
    Click Here
    </button>
      </div>
    </div>


    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASE_URL; ?>/user/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="cari user.." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
      </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3>Data User</h3>
            <ul class="list-group">
            <?php foreach($data["user"] as $user) :?>
                <li class="list-group-item">
                    <?= $user['nama']; ?>
                    <a href="<?= BASE_URL;?>/User/detail/<?= $user['id'];?>" class="badge text-bg-primary float-end ms-2">detail</a>
                    <a href="<?= BASE_URL;?>/User/ubah/<?= $user['id'];?>" class="badge text-bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id']; ?>">ubah</a>
                    <a href="<?= BASE_URL;?>/User/hapus/<?= $user['id'];?>" class="badge text-bg-danger float-end ms-2" onclick="return confirm('yakin?');">hapus</a>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASE_URL; ?>/User/tambah" method="post">
            <input type="hidden" name="id" id="id">  
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>    
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
      </div>
    </div>
  </div>
</div>