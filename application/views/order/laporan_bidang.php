<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                <a href="<?= base_url('order/laporan_bidang') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('order/laporan_bidang') ?>" method="post">
                        <div class="input-group mb-3 col-6">
                            <div class="form-group mr-1">
                                <select name="cari_bidang" class="custom-select">
                                    <option value="">--PILIH BIDANG--</option>
                                    <?php foreach ($data_bidang as $x) : ?>
                                        <option value="<?= $x->id_bidang; ?>"><?= $x->nama_bidang; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group ml-2">
                                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </form>
                    <form action="<?= base_url('order/cetak_laporan_bidang') ?>" method="post">
                        <input type="hidden" name="cari_bidang" value="<?= $cari_bidang ?>">
                        <div class="form-group ml-2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cetak</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="table-responsive">
                            <div class="container">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="container">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User</th>
                                                <th>Bidang</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            foreach ($data as $x) { ?>
                                                <tr>
                                                    <td><?= $nomor++; ?></td>
                                                    <td><?= $x->user; ?></td>
                                                    <td><?= $x->nama_bidang; ?></td>
                                                    <td><?= $x->tanggal; ?></td>
                                                    <td align="center">
                                                        <a href="<?= base_url('order/view_selesai/') . $x->id_peg ?>" class="btn btn-primary">View</a>
                                                        <a href="<?= base_url('order/hapusorder/') . $x->id_peg ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>