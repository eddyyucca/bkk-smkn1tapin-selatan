<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Lowongan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('admin/buat_lowongan_baru') ?>" class="btn btn-primary">Buat Lowngan Baru</a>
                <a href="<?= base_url('admin/cetak_lowongan_aktif') ?>" class="btn btn-primary">Cetak Lowngan Aktif</a>
                <hr>
                <form action="<?= base_url('admin/cetak_lowongan_aktif_bulan') ?>" method="post">
                    <div class="input-group mb-3 col-6">
                        <input type="date" class="form-control" id="tgl1" name="tgl1" placeholder="Batas Tanggal">

                        <input type="date" class="form-control" id="tgl2" name="tgl2" placeholder="Batas Tanggal">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cetak</button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lowongan</th>
                            <th>Perusahaan/Instansi</th>
                            <th>Batas Waktu</th>
                            <th>Foto Lowongan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <?php if ($x->batas_tanggal < date('Y-m-d')) {
                            } else { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->nama_lowongan; ?></td>
                                    <td><?= $x->nama_perusahaan; ?></td>
                                    <td><?= $x->batas_tanggal; ?></td>
                                    <td> <img class="shadow" <?php
                                                                if ($x->foto == false) { ?> src="<?= base_url('assets/images/kosong.webp') ?>" <?php
                                                                                                                                            } else {
                                                                                                                                                ?> src="<?= base_url('assets/foto/' . $x->foto) ?>" <?php
                                                                                                                                                                                                } ?> "
                              alt=" Sarana" class="card-img-top" data-holder-rendered="true" style="height: 275px; width: 225px; display: block;"></td>
                                    <td align="center">
                                        <a href="<?= base_url('admin/edit_lowongan/' . $x->id_lowongan) ?>" class="btn btn-success">Ubah</a>

                                        <a href="<?= base_url('admin/semua_pelamar_p/' . $x->id_lowongan) ?>" class="btn btn-primary">Lihat Pelamar</a>

                                        <a href="<?= base_url('admin/hapus_lowongan/' . $x->id_lowongan) ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus Lowongan</a>


                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>