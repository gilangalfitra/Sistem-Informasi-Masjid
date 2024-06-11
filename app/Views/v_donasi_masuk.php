<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <table class="table" id="example1">
                <thead>
                    <tr>
                        <th width="50px">NO</th>
                        <th>Rekening Tujuan</th>
                        <th>Rekening Pengirim</th>
                        <th>Jumlah</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($donasi as $key => $value) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <p>
                                    <h5><b><?= $value['nama_bank_tujuan'] ?></b></h5>
                                    <?= $value['no_rek_tujuan'] ?> <br>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <h5><b><?= $value['nama_bank_pengirim'] ?></b></h5>
                                    <?= $value['no_rek_pengirim'] ?> <br>
                                    a.n : <?= $value['nama_pengirim'] ?> <br>
                                    Tanggal : <?= $value['tanggal'] ?>
                                </p>
                            </td>
                            <td>
                                Rp. <?= number_format($value['jumlah'], 0) ?> <br>
                                <?= $value['jenis_donasi'] == 'Masjid' ? '<span class="right badge badge-success">Masjid</span>' : '<span class="right badge badge-primary">Sosial</span>' ?>
                            </td>
                            <td>
                                <img src="<?= base_url('bukti/' . $value['bukti']) ?>" width="200px">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
