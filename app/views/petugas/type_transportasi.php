<div class="container">
    <h4>Type Tujuan</h4>
    <a href="<?= BASEURL; ?>/petugas/form_tambah_type" class="btn btn-primary">Tambah Type Transportasi</a>
    <div class="row">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Type</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['type_tujuan'] as $type): ?>
                        <tr>
                            <td>++</td>
                            <td><?= $type['nama_type']; ?></td>
                            <td><?= $type['keterangan']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/petugas/edit_type_tujuan/<?= $type['id_type_transportasi']; ?>" class="btn btn-success">Edit</a><br>
                                <a href="<?= BASEURL; ?>/petugas/delete_type/<?= $type['id_type_transportasi']; ?>" class="btn btn-danger">Hapus</a> 
                                <!-- <a href="<?= BASEURL; ?>/petugas/edit/<?= $type['id_type_type_tujuan']; ?>" class="btn btn-success">edit</a>
                                <a href="<?= BASEURL; ?>/petugas/hapus/<?= $type['id_type_type_tujuan']; ?>" class="btn btn-danger">Hapus</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        </div>
    </div>
</div>