<div class="container">
    <?php if($_SESSION['id_petugas']): ?>
        <h2 class="mb-4">Halo 👋,<?= $data['petugas']['nama_petugas']; ?></h2>
    <?php endif ?>
    <div class="row">
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-dark">User</h4>
                        </div>
                        <div class="col-4">
                            <a href="<?= BASEURL; ?>/petugas/user" class="btn btn-primary">Meluncur</a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-dark">Pesanan</h4>
                        </div>
                        <div class="col-4">
                        <a href="<?= BASEURL; ?>/petugas/pesanan" class="btn btn-primary">Meluncur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-dark">Rute</h4>
                        </div>
                        <div class="col-4">
                            <a href="<?= BASEURL; ?>/petugas/rute" class="btn btn-primary">Meluncur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-dark">Transportasi</h4>
                        </div>
                        <div class="col-4">
                            <a href="<?= BASEURL; ?>/petugas/transportasi" class="btn btn-primary">Meluncur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-dark">Type Transportasi</h4>
                        </div>
                        <div class="col-4">
                            <a href="<?= BASEURL; ?>/petugas/type_transportasi" class="btn btn-primary">Meluncur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>