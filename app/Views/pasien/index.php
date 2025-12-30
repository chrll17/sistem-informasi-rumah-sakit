<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="card border-primary">
        <div class="card-header text-primary-emphasis">
            <h4>Daftar Pasien</h4>
        </div>
        <div class="card-body">
            <div class="button-container">
                <a href="<?= route_to('pasien.create') ?>" class="btn btn-outline-primary">Tambah Data Pasien</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a = 1 ?>
                        <?php foreach ($pasien as $p) : ?>
                            <tr>
                                <th scope="row"><?= $a++; ?></th>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['jenkel']; ?></td>
                                <td><?= $p['alamat']; ?></td>
                                <td><?= $p['telepon']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endsection(); ?>