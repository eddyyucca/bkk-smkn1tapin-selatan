<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                <a href="<?= base_url('order') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="container">
                                <?php $no = 1;
                                foreach ($data2 as $k) :
                                    if ($no++ > 1) break;
                                ?>
                                    <form action="<?= base_url('kepala_gs/prosesedit/') . $k->id_order ?>" method="POST">
                                    <?php endforeach; ?>
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <div class="container">
                                            <thead>
                                                <tr>
                                                    <th>BARANG</th>
                                                    <th>QTY</th>
                                                    <th>SATUAN</th>
                                                    <th>TANGGAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;

                                                if ($data2 == false) { ?>
                                                    <td colspan='5' align='center'>Data Kosong</td>
                                                    <?php
                                                } else {
                                                    foreach ($data2 as $x) { ?>

                                                        <tr>
                                                            <td><?= $x->item ?></td>
                                                            <td><input type="text" name="qty_order" value="<?= $x->qty_order ?>"></td>
                                                            <input type="hidden" name="redirect" value="<?= $x->id_keranjang; ?>">
                                                            <td><?= $x->satuan ?></td>
                                                            <td><?= $x->tanggal ?></td>
                                                        </tr>
                                            </tbody>
                                        <?php } ?>
                                        <td colspan='6' align="center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </td>
                                    <?php } ?>
                                    </table>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>