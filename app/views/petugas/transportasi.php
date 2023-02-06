<div class="container">
    <h4>Rute Tujuan</h4>
    <a href="<?= BASEURL; ?>/petugas/form_tambah_transportasi" class="btn btn-primary">Tambah Type Transportasi</a>
    <div class="row">
        <div class="col-8">
            <table class="table">
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
                                <a href="<?= BASEURL; ?>/petugas/edit_transportasi/<?= $trans['id_transportasi']; ?>" class="btn btn-success">Edit</a><br>
                                <a href="<?= BASEURL; ?>/petugas/delete_transportasi/<?= $trans['id_transportasi']; ?>" class="btn btn-danger">Hapus</a> 
                                <!-- <a href="<?= BASEURL; ?>/petugas/edit/<?= $trans['id_type_transportasi']; ?>" class="btn btn-success">edit</a>
                                <a href="<?= BASEURL; ?>/petugas/hapus/<?= $trans['id_type_transportasi']; ?>" class="btn btn-danger">Hapus</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        </div>
    </div>
</div>