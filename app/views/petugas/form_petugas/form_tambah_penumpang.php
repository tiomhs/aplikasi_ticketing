<div class="container">
    <h4>Ini Form untuk penumpang</h4>
    <div class="row">
        <div class="col-8">
        <form class="user" action="<?= BASEURL; ?>/petugas/add_penumpang" method="post">
            <div class="form-group">
                <label for="username">Username :</label> 
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password :</label> 
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <div class="form-group">
                <label for="nama_penumpang">Nama Penumpang :</label> 
                <input type="text" class="form-control" id="nama_penumpang" name="nama_penumpang">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label> 
                <input type="text" class="form-control" id="alamat" name="alamat_penumpang">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir :</label> 
                <input type="date" data-date-format="YYYY MM DD" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select form-control mb-2" name="jenis_kelamin">
                    <option selected>Masukkan Jenis kelamin anda</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon :</label> 
                <input type="text" class="form-control" id="exampleInputEmail" name="telefone">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">
                Submit
            </button>
            
            
        </form>
        </div>
    </div>
</div>