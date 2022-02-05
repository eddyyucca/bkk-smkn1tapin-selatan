<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Lowongan</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url('admin/cek_ditolak') ?>" class="btn btn-success">Pelamar Ditolak</a>
            <a href="<?= base_url('admin/cek_diterima') ?>" class="btn btn-success">Pelamar Diterima</a>
            <a href="<?= base_url('admin/pengajuan_kerja') ?>" class="btn btn-success">Pelamar Diperiksa</a>
            |
            <a href="<?= base_url('admin/pelamar_ditolak') ?>" class="btn btn-primary">Cetak Pelamar Ditolak</a>
            <a href="<?= base_url('admin/pelamar_diterima') ?>" class="btn btn-primary">Cetak Pelamar Diterima</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lowongan</th>
                            <th>Perusahaan/Instansi</th>
                            <th>Nama Pemohon</th>
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
                                <td><?= $x->nama_perusahaan; ?></td>
                                <td><?= $x->nama_alumni; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/lihat_pelamar/' . $x->telpon) ?>" class="btn btn-danger">Lihat Pelamar</a>
                                    <a href="<?= base_url('admin/tolak/' . $x->id_lamaran) ?>" class="btn btn-primary">Tolak Pelamar</a>
                                    <a href="<?= base_url('admin/terima/' . $x->id_lamaran) ?>" class="btn btn-success">Terima Pelamar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>