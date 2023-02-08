<div class="container">
    <h4>Form Transportasi</h4>
    <div class="row">
        <div class="col-8">
        <form action="<?= BASEURL; ?>/petugas/add_transportasi" method="post">
            <div class="form-group">
                <label for="">Jumlah Kursi</label>
                <input type="text" class="form-control" id="exampleInputEmail" name="jumlah_kursi">
            </div>
            
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" id="exampleInputEmail" name="keterangan">
            </div>

            <div class="form-group">
                <label for="">Type Transportasi</label>
                <select class="form-select form-control mb-2" aria-label="Default select example" name="id_type_transportasi">
                    <?php foreach($data['type_transportasi'] as $transportasi): ?>
                        <option value="<?= $transportasi['id_type_transportasi']; ?>"><?=$transportasi['nama_type']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
            
            
        </form>
        </div>
    </div>
</div>