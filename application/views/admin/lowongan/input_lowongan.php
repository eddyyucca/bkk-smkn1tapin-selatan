<!-- Begin Page Content -->
<div class="container col-8">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/proses_input_lowongan')  ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputItem">Nama Lowongan</label>
                            <input type="text" class="form-control" id="nama_lowongan" name="nama_lowongan" placeholder="Nama Lowongan">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">Perusahaan/Instansi</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan/isntansi">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">Batas Tanggal</label>
                            <input type="date" class="form-control" id="batas_tanggal" name="batas_tanggal" placeholder="Batas Tanggal">
                        </div>

                        <div class="form-group">
                            <label for="inputItem">Isi Lowongan</label>
                            <textarea class="form-control" name="isi_lowongan" rows="5"></textarea>
                        </div>
                        <tr>
                            <td>Foto</td>
                            <td>
                                <input type="file" name="foto" class="" accept="image/*">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>