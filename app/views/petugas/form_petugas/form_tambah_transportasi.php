<div class="container">
    <h4>Ini Form untuk Transportasi</h4>
    <div class="row">
        <div class="col-8">
        <form action="<?= BASEURL; ?>/petugas/add_transportasi" method="post">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="jumlah_kursi" name="jumlah_kursi">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="keterangan" name="keterangan">
            </div>
            <select class="form-select mb-2" aria-label="Default select example" name="id_type_transportasi">
                <?php foreach($data['type_transportasi'] as $transportasi): ?>
                    <option value="<?= $transportasi['id_type_transportasi']; ?>"><?=$transportasi['nama_type']; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
            </button>
            
            
        </form>
        </div>
    </div>
</div>