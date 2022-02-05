<!-- Begin Page Content -->
<div class="container col-8">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/alumni') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/tambah_alumni_baru')  ?>" method="POST" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td width=20%>Alamat</td>
                                <td><input type="text" name="nama_alumni" class="form-control" required placeholder="Nama Lengkap"></td>
                            </tr>
                            <tr>
                                <td width=20%>Tanggal Lahir</td>
                                <td><input type="date" name="tgl_lahir" class="form-control" required placeholder="Tanggal Lahir"></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td> <select class="form-control" name="agama">
                                        <option value="">--AGAMA--</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width=20%>Pendidikan Terakhir</td>
                                <td><input type="text" name="pendidikan_t" class="form-control" required placeholder="Pendidikan Terakhir"></td>
                            </tr>
                            <tr>
                                <td width=20%>Alamat</td>
                                <td><input type="text" name="alamat" class="form-control" required placeholder="Alamat"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" class="form-control" required placeholder="Email"></td>
                            </tr>
                            <tr>
                                <td>Telpon</td>
                                <td><input type="text" name="telpon" class="form-control" required placeholder="telpon"></td>
                            </tr>
                            <tr>
                                <td>Jurusan SMK</td>
                                <td><select name="jurusan_smk" class="form-control">
                                        <option value="">--PILIH BIDANG--</option>
                                        <?php foreach ($jurusan as $jur) { ?>
                                            <option value="<?= $jur->id_jurusan ?>"><?= $jur->nama_jurusan ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Tahun Lulus SMK</td>
                                <td><input type="text" name="tahun_lulus" class="form-control" required placeholder="Tahun Lulus SMK"></td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>
                                    <input type="file" name="foto" class="file" accept="image/*">
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control" disabled placeholder="Upload File" id="foto">
                                        <div class="input-group-append">
                                            <button type="button" class="browse btn btn-primary">Browse...</button>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-6">
                                        <img src="<?= base_url("assets/images/default.png") ?>" width="100" height="100" id="preview" class="img-thumbnail">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-primary">Simpan</button>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>