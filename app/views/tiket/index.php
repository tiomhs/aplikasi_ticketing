<div class="container">
    <div class="row">
        <h1>Rute yang Tersedia</h1>
        <div class="row">
            <?php foreach($data['rute'] as $rute): ?>
                <div class="col-4">
                    <div class="card my-2">
                        <div class="card-body">
                            <h5 class="card-title"><?= $rute['tujuan']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp.<?= $rute['harga']; ?></h6>
                            <p class="card-text"><?= $rute['rute_awal']; ?> sampai <?= $rute['rute_akhir']; ?></p>
                            <a href="<?= BASEURL; ?>/tiket/detail/<?= $rute['id_rute']; ?>" class="card-link">detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
