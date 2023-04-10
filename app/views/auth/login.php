<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-6 shadow rounded-4 p-4">
            <h1 class="text-center">Login</h1>
<form method="post" action="<?= BASE_URL; ?>/Login/auth">
<?= Flasher::flash(); ?>
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
