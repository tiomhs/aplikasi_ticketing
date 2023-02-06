<div class="container">
 
    
    <table class="table table-border">
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Buku</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($data['mhs'] as $mhs): ?>
                <tr>
                    <td><p><?= $mhs['nim']; ?></p></td>
                    <td><p><?= $mhs['nama']; ?></p></td>
                    <td><p><?= $mhs['alamat']; ?></p></td>
                    <td><p><?= $mhs['buku']; ?></p></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        
</div>