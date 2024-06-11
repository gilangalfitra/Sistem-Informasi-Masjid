<div class="col-md-12">
    <div class="card card-success card-outline">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?> Bulan <?= date('M Y') ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <?php 
                $currentDate = date('Y-m-d'); // Ambil tanggal saat ini
                foreach ($agenda as $key => $value) { 
                    $agendaDate = date('Y-m-d', strtotime($value['tanggal'])); // Konversi tanggal agenda
                    $status = ($agendaDate < $currentDate) ? 'Selesai' : 'Akan Datang'; // Tentukan status
                    $statusColor = ($status == 'Selesai') ? 'text-danger' : 'text-success'; // Tentukan warna berdasarkan status
                ?>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon">
                                <i class="fas fa-bullhorn <?= $statusColor ?> fa-2x"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Kegiatan</span>
                                <span class="info-box-number"><?= $value['nama_kegiatan'] ?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%"></div>
                                </div>
                                <span class="progress-description">
                                    <i class="fas fa-calendar-alt <?= $statusColor ?>"></i> <?= $value['tanggal'] ?>
                                    <i class="fas fa-clock <?= $statusColor ?>"></i> <?= $value['jam'] ?>
                                </span>
                                <span class="badge badge-pill <?= ($status == 'Selesai') ? 'badge-danger' : 'badge-success' ?>"><?= $status ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                <?php } ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
