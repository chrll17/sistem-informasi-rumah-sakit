<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>
    <a href="<?= route_to('pasien') ?>">Kembali</a>
    <form action="<?= route_to('pasien.save') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama.." autofocus>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="Laki-laki" name="jenkel" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="Perempuan" name="jenkel" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat..">
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Misal '081234567890'">
        </div>
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
    </form>
<?= $this->endsection(); ?>