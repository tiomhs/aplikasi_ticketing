<div class="container">
    <div class="row">
        <div class="col-12  ">
            <?= var_dump($data); ?>
            <h1>Tujuan : <?= $data['detail_tiket']['tujuan']; ?></h1>
            <p>Rute Awal : <?= $data['detail_tiket']['rute_awal']; ?></p>
            <p>Rute Akhir : <?= $data['detail_tiket']['rute_akhir']; ?></p>
            <p>Harga : <?= $data['detail_tiket']['harga']; ?></p>
            <p>Jumlah Kursi : <?= $data['detail_tiket']['jumlah_kursi']; ?></p>
            <p>Keterangan : <?= $data['detail_tiket']['keterangan']; ?></p>
            <p>Kendaraan : <?= $data['detail_tiket']['nama_type']; ?></p>
            <a href="<?= BASEURL; ?>/tiket/pemesanan">Pesan Sekarang</a>
        </div>
    </div>
</div>