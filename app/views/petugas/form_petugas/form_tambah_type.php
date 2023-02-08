<div class="container">
    <h4>Form Type Tranportasi</h4>
    <div class="row">
        <div class="col-8">
        <form action="<?= BASEURL; ?>/petugas/add_type" method="post">
            <div class="form-group">
                <label for="">Nama Type</label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama_type">
            </div>
            
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="keterangan">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
            
            
        </form>
        </div>
    </div>
</div>