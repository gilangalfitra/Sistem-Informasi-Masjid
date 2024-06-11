<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Laporan Kas Sosial</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <div>Bulan</div>
                        <select name="bulan" id="bulan" class="form-control">
                            <option value="">--Bulan--</option>
                            <?php for ($i = 1; $i <= 12; $i++) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div>Tahun</div>
                        <div class="col-10 input-group">
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="">--Tahun--</option>
                                <?php for ($i = date('Y'); $i <= date('Y') + 3; $i++) : ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                            <span class="input-group-append">
                                <button class="btn btn-primary" onclick="ViewLaporan()">View</button>
                                <button class="btn btn-success" onclick="PrintLaporan()"><i class="fas fa-print"></i> Print</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12" id="printarea">
                <div class="text-center">
                    <p class="text-center">
                        <h3><b><?= $masjid['nama_masjid'] ?></b></h3>
                        <p><?= $masjid['alamat'] ?><br>
                            <b>Laporan Kas Sosial</b>
                        </p>
                    </p>
                </div>
                <div class="Tabel">
                    
                </div>
            </div>

        </div>
    </div>
    <!-- /.card -->
</div>

<script>
    function ViewLaporan() {
        let bulan = $('#bulan').val();
        let tahun = $('#tahun').val();
        if (bulan == '') {
            alert('Bulan Belum Dipilih!!');
        } else if (tahun == '') {
            alert('Tahun Belum Dipilih!!');
        } else {
            $.ajax({
                type: 'POST',
                url: "<?= base_url('KasSosial/ViewLaporan') ?>",
                data: {
                    bulan: bulan,
                    tahun: tahun,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.data) {
                        $('.Tabel').html(response.data);
                    }
                }
            });
        }
    }

    function PrintLaporan() {
        var print = document.getElementById('printarea');
        newWin = window.open('', 'newWin', 'toolbar=no, width=1500, height=800, scrollbars=yes');
        newWin.document.write(print.innerHTML);
        newWin.document.close();
        newWin.focus();
        newWin.print();
        newWin.close();
    }
</script>
