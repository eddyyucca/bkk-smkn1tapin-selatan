<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Alumni</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('admin/cari_tahun_lulus')  ?>" method="POST" enctype="multipart/form-data">
                        <input type="number" name="tahun_lulus" class="form-control" required placeholder="Tahun Lulus">
                        <button class="btn btn-primary mt-3">Cari</button>
                    </form>
                    <hr>
                    <a href="<?= base_url('admin/tambah_alumni_baru') ?>" class="btn btn-primary">Tambah Alumni Baru</a>
                    <a href="<?= base_url('admin/cetak_alumni') ?>" class="btn btn-primary">Cetak Data Alumni</a>
                    <hr>
                </div>
                <?php if ($lapor == "gagal") { ?>
                    <div class="alert alert-danger" role="alert">
                        This is a danger alert—check it out!
                    </div>
                <?php } else { ?>

                <?php  } ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus SMK</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_alumni; ?></td>
                                <td><?= $x->email; ?></td>
                                <td><?= $x->nama_jurusan; ?></td>
                                <td><?= $x->tahun_lulus; ?></td>
                                <td><?= $x->pendidikan_t; ?></td>
                                <td align="center">
                                    <?php if ($x->status_akun == 0) { ?>
                                        <a href="<?= base_url('admin/aktifkan_akun/') . $x->telpon; ?>" class="btn btn-primary">Aktifkan</a> <?php } ?>
                                    <a href="<?= base_url('admin/delete_alumni/') . $x->telpon; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin/edit_alumni/') . $x->telpon; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('admin/view_alumni/') . $x->telpon; ?>" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>