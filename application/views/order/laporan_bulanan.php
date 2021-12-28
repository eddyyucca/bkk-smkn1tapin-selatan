<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Laporan Bulanan
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('order/laporan_bulanan') ?>" method="post">
                        <div class="input-group mb-3 col-6">
                            <div class="form-group mr-1">
                                <select name="bulan" id="" class="custom-select">
                                    <option value="">--PILIH Bulan--</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tahun" placeholder="Tahun">
                            </div>
                            <div class="form-group ml-2">
                                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </form>
                    <form action="<?= base_url('order/cetak_laporan_bulanan') ?>" method="post">
                        <input type="hidden" name="bulan" value="<?= $bulan ?>">
                        <input type="hidden" name="tahun" value="<?= $tahun ?>">
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