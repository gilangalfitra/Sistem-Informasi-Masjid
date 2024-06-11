<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masjid Al-Ikhlas | <?= $judul?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
  <?php
  $db = \Config\Database::connect();
  $web = $db->table('tbl_setting')->get()->getRowArray();
  ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= base_url() ?> " class="navbar-brand">
        <i class="fas fa-mosque fa-2x text-green"></i><b> <?= $web['nama_masjid']?></b>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item <?= ($judul == 'Home')? 'active' : ''?>">
            <a href="<?= base_url()?>" class="nav-link ">Home</a>
          </li>

          <li class="nav-item <?= ($judul == 'Agenda')? 'active' : ''?>">
            <a href="<?= base_url('Home/Agenda')?> "class="nav-link">Agenda</a>
          </li>
          <li class="nav-item dropdown <?= ($judul == 'Rekap Kas Masjid' || $judul == 'Rekap Kas Sosial')? 'active' : ''?>">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kas</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('Home/RekapKasMasjid')?>" class="dropdown-item <?= ($judul == 'Rekap Kas Masjid')? 'active' : ''?>">Rekap Kas Masjid </a></li>
              <li><a href="<?= base_url('Home/RekapKasSosial')?>" class="dropdown-item <?= ($judul == 'Rekap Kas Sosial')? 'active' : ''?>">Rekap Kas Sosial</a></li>
            </ul>
          </li>
          <li class="nav-item <?= ($judul == 'PesertaQurban') ? 'active' : '' ?>">
            <a href="<?= base_url('Home/PesertaQurban')?>" class="nav-link">Peserta Kurban</a>
          </li>

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">Kontak</a>
          </li> -->

          <li class="nav-item">
          <a href="<?= base_url('Home/Donasi')?>" class="btn btn-warning">
            <i class="fas fa-hand-holding-usd"></i> Donasi
          </a>
        </li>

        </ul>
      </div>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <?= $judul?></h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
            <?php 
            if ($page) {
                echo view($page);
            }
            ?>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; <?= date('Y') ?> <a href="https://www.google.com/maps/place/Masjid+Al-Ikhlas+Desa+Bangun+Rakyat/@2.8805627,98.8595252,17z/data=!3m1!4b1!4m6!3m5!1s0x303197c8ee66c775:0xed9140ecb52a186a!8m2!3d2.8805573!4d98.8621001!16s%2Fg%2F11l65_g7pk?entry=ttu"><?= $web['nama_masjid']?></a>.</strong> <?= $web['alamat']?>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>

</body>

</html>
