<div class="container">
    <div class="row">
        <h1>Halaman Pesanan</h1>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Pesanan</th>
                <th scope="col">Tanggal Pesanan</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['pesanan'] as $pesan): ?>
                    <tr>
                        <td>++</td>
                        <td><?= $pesan['kode_pemesanan']; ?></td>
                        <td><?= $pesan['tanggal_pemesanan']; ?></td>
                        <td><?= $pesan['tujuan']; ?></td>
                        <td> Proses</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
</div>