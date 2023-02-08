<div class="container">
    <h4 class="mb-4">Form Tambah Petugas</h4>
    <div class="row">
        <div class="col-5">
            <form action="<?= BASEURL; ?>/petugas/add" method="post">
                <div class="mb-2">
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="password">password : </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nama_petugas">nama_petugas : </label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Tambah</button>
            </form>
        </div>
    </div>
</div>