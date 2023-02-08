<div class="container">
    <h4>Rute Perjalanan</h4>
    <a href="<?= BASEURL; ?>/petugas/form_tambah_rute" class="btn btn-primary mb-2">Tambah Rute Perjalanan</a>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Rute Awal</th>
                    <th scope="col">Rute Akhir</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['rute'] as $pesan): ?>
                        <tr>
                            <td>#</td>
                            <td><?= $pesan['tujuan']; ?></td>
                            <td><?= $pesan['rute_awal']; ?></td>
                            <td><?= $pesan['rute_akhir']; ?></td>
                            <td><?= $pesan['harga']; ?></td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/edit/<?= $pesan['id_rute']; ?>" class="btn btn-success">Edit</a><br>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/delete_rute/<?= $pesan['id_rute']; ?>" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        </div>
    </div>
</div>