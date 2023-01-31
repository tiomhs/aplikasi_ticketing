<div class="container">
    <div class="row">
        <h2>User Model</h2>
    </div>
    <div class="row">
        <div class="col-8">
            <h4>Petugas</h4>
            <a href="<?= BASEURL; ?>/petugas/add" class="btn btn-info">Tambah Petugas</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['petugas'] as $petugas): ?>
                        <tr>
                            <td>#</td>
                            <td><?= $petugas['username']; ?></td>
                            <td><?= $petugas['nama_petugas']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/petugas/edit/<?= $petugas['id_petugas']; ?>" class="btn btn-success">Edit</a><br>
                                <a href="<?= BASEURL; ?>/petugas/delete/<?= $petugas['id_petugas']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>