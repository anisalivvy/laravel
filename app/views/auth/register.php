<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-6 shadow rounded-4 p-4">
            <h1 class="text-center">Halaman Register</h1>
<form method="POST" action="<?= BASE_URL; ?> register/prosesRegister">
<?= Flasher::flash(); ?>
<div class="mb-3">
    <label for="exampleInputName" class="form-label">Nama</label>
    <input type="name" class="form-control" id="exampleInputName" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>