<div class="container">
    <h4>Transportasi</h4>
    <a href="<?= BASEURL; ?>/petugas/form_tambah_transportasi" class="btn btn-primary mb-2">Tambaha Transportasi</a>
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Jumlah Kursi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['transportasi'] as $trans): ?>
                        <tr>
                            <td>++</td>
                            <td><?= $trans['kode']; ?></td>
                            <td><?= $trans['jumlah_kursi']; ?></td>
                            
                            <td><?= $trans['keterangan']; ?></td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/edit_transportasi/<?= $trans['id_transportasi']; ?>" class="btn btn-success">Edit</a><br>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= BASEURL; ?>/petugas/delete_transportasi/<?= $trans['id_transportasi']; ?>" class="btn btn-danger">Hapus</a> 
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