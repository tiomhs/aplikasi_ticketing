<div class="container">
    <h4>Rute Tujuan</h4>
    <a href="<?= BASEURL; ?>/petugas/form_tambah_rute" class="btn btn-primary">Tambah Rute</a>
    <div class="row">
        <div class="col-8">
            <table class="table">
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
                            <td>++</td>
                            <td><?= $pesan['tujuan']; ?></td>
                            <td><?= $pesan['rute_awal']; ?></td>
                            <td><?= $pesan['rute_akhir']; ?></td>
                            <td><?= $pesan['harga']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/petugas/edit/<?= $pesan['id_rute']; ?>" class="btn btn-success">Edit</a><br>
                                <a href="<?= BASEURL; ?>/petugas/delete_rute/<?= $pesan['id_rute']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        </div>
    </div>
</div>