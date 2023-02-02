<div class="container">
    <h4>Ini Form untuk penumpang</h4>
    <div class="row">
        <div class="col-8">
        <form action="<?= BASEURL; ?>/petugas/add_rute" method="post">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="tujuan" name="tujuan">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="rute_awal" name="rute_awal">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="rute_akhir" name="rute_akhir">
            </div>
            <div class="form-group">
                <input type="number" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="harga" name="harga">
            </div>
            <select class="form-select mb-2" aria-label="Default select example" name="id_type_transportasi">
                <?php foreach($data['transportasi'] as $transportasi): ?>
                    <option value="<?= $transportasi['id_transportasi']; ?>"><?=$transportasi['keterangan']; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
            </button>
            
            
        </form>
        </div>
    </div>
</div>