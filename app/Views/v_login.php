<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masjid Al-Ikhlas | <?= $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="<?= base_url() ?> " class="h1"><i class="fas fa-mosque fa-3x text-success"></i><br><b>Masjid Al-Ikhlas</b></a>
      <p class="login-box-msg">Log in to admin</p>
    </div>
    <div class="card-body">
      <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success">
          <?= session()->getFlashdata('pesan') ?>
        </div>
      <?php endif ?>

      <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
          <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <p><?= $error ?></p>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      <?php if (session()->getFlashdata('gagal')): ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('gagal') ?>
        </div>
      <?php endif ?>

      <?= form_open('Login/CekLogin') ?>
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email" value="<?= old('email') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p class="text-danger"><?= $validation->getError('email') ?></p>

        <div class="input-group mb-3">
          <input name="password" id="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="togglePassword" class="fas fa-lock" style="cursor: pointer;"></span>
            </div>
          </div>
        </div>
        <p class="text-danger"><?= $validation->getError('password') ?></p>

        <div class="row justify-content-center">
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
        </div>
      <?= form_close() ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>

<!-- JavaScript untuk Toggle Password Visibility -->
<script>
  document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    
    this.classList.toggle('fa-lock');
    this.classList.toggle('fa-lock-open');
  });
</script>
</body>
</html>
