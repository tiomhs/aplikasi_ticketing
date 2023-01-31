<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Pemesanan</h2>
            <div class="row">
                <div class="col">
                    <form action="<?= BASEURL; ?>/tiket/pemesanan" method="post">
                        <div class="form-group">
                            <label for="tempat_pemesanan">Tempat Pemesanan</label>
                            <input type="text" class="form-control" id="tempat_pemesanan" name="tempat_pemesanan">
                        </div>                                                
                        <div class="form-group mb-">
                            <label for="tujuan">Tujuan</label>
                                <select class="form-control" id="tujuan">
                                <?php foreach($data['tujuan'] as $tujuan): ?>
                                    <option value="<?= $tujuan['tujuan']; ?>"><?= $tujuan['tujuan']; ?></option>
                                <?php endforeach; ?>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berangkat">tanggal_berangkat</label>
                            <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat">
                        </div>
                        <div class="form-group">
                            <label for="jam_checkin">Jam Checkin</label>
                            <input type="time" class="form-control" id="jam_checkin" name="jam_checkin">
                        </div>
                        <div class="form-group">
                            <label for="jam_berangkat">Jam Berangkat</label>
                            <input type="time" class="form-control" id="jam_berangkat" name="jam_berangkat">
                        </div>
                        <div class="form-group">
                            <label for="total_bayar">total_bayar</label>
                            <input type="number" class="form-control" id="total_bayar" name="total_bayar">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>