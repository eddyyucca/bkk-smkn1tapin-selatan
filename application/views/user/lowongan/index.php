<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Lowongan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if ($notif == true) { ?>
                    <div class="alert alert-danger" role="alert">
                        Anda Sudah Melakukan Lamaran !
                    </div>
                <?php } elseif ($notif == false) {
                } ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lowongan</th>
                            <th>Perusahaan/Instansi</th>
                            <th>Batas Waktu</th>
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
                                    <td align="center">
                                        <a href="<?= base_url('user/lihat_lowongan/' . $x->id_lowongan) ?>" class="btn btn-primary">Lihat Lowongan</a>
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