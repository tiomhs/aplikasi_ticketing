<div class="container">
    <h4>Ini Form untuk penumpang</h4>
    <div class="row">
        <div class="col-8">
        <form action="<?= BASEURL; ?>/petugas/add_rute" method="post">
            <div class="form-group">
                <label>Tujuan</label>
                <input type="text" class="form-control" id="exampleInputEmail" name="tujuan">
            </div>
            
            <div class="form-group">
                <label>Rute Awal</label>
                <input type="text" class="form-control" id="exampleInputEmail" name="rute_awal">
            </div>
            
            <div class="form-group">
                <label>Rute Akhir</label>
                <input type="text" class="form-control" id="exampleInputEmail" name="rute_akhir">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" id="exampleInputEmail" name="harga">
            </div>
            <div class="form-group">
                <label>Transportasi</label>
                <select class="form-select form-control mb-2" aria-label="Default select example" name="id_type_transportasi">
                    <?php foreach($data['transportasi'] as $transportasi): ?>
                        <option value="<?= $transportasi['id_transportasi']; ?>"><?=$transportasi['keterangan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Submit
            </button>
            
            
        </form>
        </div>
    </div>
</div>