<div class="container">
    <h4>Ini Form untuk penumpang</h4>
    <div class="row">
        <div class="col-8">
        <form class="user" action="<?= BASEURL; ?>/petugas/add_penumpang" method="post">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="username" name="username">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="pass" name="password">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Nama petugas" name="nama_penumpang">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="alamat penumpang" name="alamat_penumpang">
            </div>
            <div class="form-group">
                <input type="date" data-date-format="YYYY MM DD" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="tanggal lahir" name="tanggal_lahir">
            </div>
            <select class="form-select mb-2" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Masukkan Jenis kelamin anda</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="nomor telepon" name="telefone">
            </div>
            
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
            </button>
            
            
        </form>
        </div>
    </div>
</div>