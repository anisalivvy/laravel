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
        <form action="<?= BASE_URL; ?>/blog/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="cari blog.." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
      </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3>Data Blog</h3>
            <ul class="list-group">
            <?php foreach($data["blog"] as $blog) :?>
                <li class="list-group-item">
                    <?= $blog['judul']; ?>
                    <a href="<?= BASE_URL;?>/blog/detail/<?= $blog['id'];?>" class="badge text-bg-primary float-end ms-2">detail</a>
                    <a href="<?= BASE_URL;?>/blog/ubah/<?= $blog['id'];?>" class="badge text-bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $blog['id']; ?>">ubah</a>
                    <a href="<?= BASE_URL;?>/blog/hapus/<?= $blog['id'];?>" class="badge text-bg-danger float-end ms-2" onclick="return confirm('yakin?');">hapus</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASE_URL; ?>/blog/tambah" method="post">
            <input type="hidden" name="id" id="id">  
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis">
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>

        <div class="mb-3">
            <label for="tulisan" class="form-label">Tulisan</label>
            <input type="text" class="form-control" id="tulisan" name="tulisan">
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