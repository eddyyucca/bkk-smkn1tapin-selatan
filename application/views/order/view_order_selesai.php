<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="container">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <div class="container">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>BARANG</th>
                                                <th>QTY</th>
                                                <th>SATUAN</th>
                                                <th>TANGGAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            if ($data == false) { ?>
                                                <td colspan='5' align='center'>Data Kosong</td>
                                                <?php
                                            } else {
                                                foreach ($data as $x) { ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $x->item ?></td>
                                                        <td><?= $x->qty_order ?></td>
                                                        <td><?= $x->satuan ?></td>
                                                        <td><?= $x->tanggal; ?></td>
                                                    </tr>
                                                <?php } ?>

                                        </tbody>
                                        <!-- <td colspan='5' align="center">
                                            <a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#selesai">Print</a>
                                        </td> -->
                                    <?php
                                            } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- proses -->
<div class=" modal fade" id="selesai" tabindex="-1" role="dialog" ria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Selesai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Klik Tombol Print Untuk Print Report Order
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <?php $no = 1;
                foreach ($data as $k) :
                    if ($no++ > 1) break;
                ?>

                    <a href="<?= base_url('order/report/') . $k->id_keranjang ?>" target="_blank" class="btn btn-primary">Selesai</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</form>
<!-- end proses -->


<!-- end batal -->