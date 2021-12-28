<!-- Begin Page Content -->
<div class="container col-8">

    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Input Barang
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <?= validation_errors() ?>
                        <form action="<?= base_url('akun/prosesInput') ?>" method="POST">
                            <div class="form-group">
                                <label for="inputItem">Username</label>
                                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="departemen">Departemen</label>
                                <select name="id_dep" id="id_dep" class="custom-select">
                                    <option value="">--PILIH DEPARTEMEN--</option>
                                    <?php foreach ($data_departemen as $x) : ?>
                                        <option value="<?= $x->id; ?>"><?= $x->nama_dep; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputItem">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="level">Level User</label>
                                <select name="level" id="level" class="custom-select">
                                    <option value="">--PILIH LEVEL--</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="kepala_gs">Kepala SG</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                    <!-- akhir -->
                </div>
            </div>
        </div>
    </div>
</div>