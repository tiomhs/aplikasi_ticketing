<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/petugas/add" method="post">
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">password : </label>
                <input type="passwod" name="password" id="password">
                <br>
                <label for="nama_petugas">nama_petugas : </label>
                <input type="text" name="nama_petugas" id="nama_petugas">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>