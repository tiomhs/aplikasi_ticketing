<div class="container">
    <div class="row">
        <div class="col-10">
            <h4>Petugas</h4>
            <a href="<?= BASEURL; ?>/petugas/form_tambah_petugas" class="btn btn-info mb-2">Tambah Petugas</a>
            <table class="table table-bordered text-center">
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
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/edit/<?= $petugas['id_petugas']; ?>" class="btn btn-success">Edit</a><br>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/delete/<?= $petugas['id_petugas']; ?>" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-10">
            <h4>Penumpang</h4>
            <a href="<?= BASEURL; ?>/petugas/form_tambah_penumpang" class="btn btn-info mb-2">Tambah Penumpang</a>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['penumpang'] as $penumpang): ?>
                        <tr>
                            <td>#</td>
                            <td><?= $penumpang['username']; ?></td>
                            <td><?= $penumpang['nama_penumpang']; ?></td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/edit/<?= $penumpang['id_penumpang']; ?>" class="btn btn-success">Edit</a><br>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/delete_penumpang/<?= $penumpang['id_penumpang']; ?>" class="btn btn-danger">Hapus</a>
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