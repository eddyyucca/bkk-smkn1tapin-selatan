<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Lowongan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('admin/buat_lowongan_baru') ?>" class="btn btn-primary">Buat Lowngan Baru</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lowongan</th>
                            <th>Jumlah Pelamar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_lowongan; ?></td>
                                <td><?= "tes" ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/pengajuan_diterima/' . $x->id_lowongan) ?>" class="btn btn-success">Ubah</a>
                                    <a href="<?= base_url('admin/pengajuan_ditolak/' . $x->id_lowongan) ?>" class="btn btn-primary">Lihat Pelamar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>