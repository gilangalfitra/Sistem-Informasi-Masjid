<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?> Bulan <?= date('M Y') ?></h3>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table" id="example1">
                <thead>
                    <tr class="text-center">
                        <th width="50px">NO</th>
                        <th width="100px">Tanggal</th>
                        <th>Keterangan</th>
                        <th>Kas Masuk</th>
                        <th>Kas Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1; 
                    $totalMasuk = 0;
                    $totalKeluar = 0;
                    
                    foreach ($kas as $key => $value) { 
                        $totalMasuk += $value['kas_masuk'];
                        $totalKeluar += $value['kas_keluar'];
                    ?>
                        <tr class="<?= $value['status'] == 'Masuk' ? 'text-success' : 'text-danger' ?>">
                            <td><?= $no++ ?></td>
                            <td><?= $value['tanggal'] ?></td>
                            <td><?= $value['ket'] ?></td>
                            <td class="text-right">Rp. <?= number_format($value['kas_masuk'], 0) ?></td>
                            <td class="text-right">Rp. <?= number_format($value['kas_keluar'], 0) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th class="text-success text-right">Rp. <?= number_format($totalMasuk, 0) ?></th>
                        <th class="text-danger text-right">Rp. <?= number_format($totalKeluar, 0) ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
