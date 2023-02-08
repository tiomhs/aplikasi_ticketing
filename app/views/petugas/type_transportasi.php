<div class="container">
    <h4>Type Transportasi</h4>
    <a href="<?= BASEURL; ?>/petugas/form_tambah_type" class="btn btn-primary mb-2">Tambah Type Transportasi</a>
    <div class="row">
        <div class="col-10">
            <table class="table table-bordered text-center">
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
                                <div class="row justify-content-center ">
                                    <div class="col-4">
                                        <a href="<?= BASEURL; ?>/petugas/edit_type_tujuan/<?= $type['id_type_transportasi']; ?>" class="btn btn-success">Edit</a><br>
                                    </div>
                                    <div class="col-4">
                                        <a href="<?= BASEURL; ?>/petugas/delete_type/<?= $type['id_type_transportasi']; ?>" class="btn btn-danger">Hapus</a> 
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