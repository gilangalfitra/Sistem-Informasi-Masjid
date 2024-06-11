<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif ?>

            <?= form_open('Admin/UpdateSetting') ?>
            <div class="form-group">
                <label>Nama Masjid</label>
                <input name="nama_masjid" value="<?= $setting['nama_masjid'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Kab/Kota</label>
                <select name="id_kota" class="form-control select2">
                    <?php foreach ($kota as $kota_item) : ?>
                        <option value="<?= $kota_item['id'] ?>" <?= $kota_item['id'] == $setting['id_kota'] ? 'selected' : '' ?>><?= $kota_item['lokasi'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" value="<?= $setting['alamat'] ?>" class="form-control">
            </div>

            <button class="btn btn-success">Simpan</button>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
