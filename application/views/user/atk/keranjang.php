<div class="container col-8">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <div class="container">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <div class="container">
                                    <tr>
                                        <th>NO</th>
                                        <th>ITEM</th>
                                        <th>QTY</th>
                                        <th>UNIT</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    if ($keranjang == false) {
                                        echo "<td colspan='5'  align='center'>
                                            <h1>Data Kosong</h1>
                                            </td>";
                                    } else { ?>

                                        <?php
                                        foreach ($keranjang as $x) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $x['item']; ?></td>
                                                <td><?= $x['qty']; ?></td>
                                                <td><?= $x['satuan']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal""><i class=" fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="5" align="center">
                                                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1"">Kosongkan</a>
                                                    <a href="" class=" btn btn-primary" data-toggle="modal" data-target="#order"">Order</a>
                                                </td>
                                                                                       </tr>
                                    <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hapus satuan -->
<div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Item ?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda Ingin Menghapus Item Ini ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                <a href="<?php echo site_url('user/hapus/' . $x['rowid']); ?>" class="btn btn-primary">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                </div>
                                <!-- hapus semua -->
                                <div class=" modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Item ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda Ingin Menghapus Semua item ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <a href="<?php echo site_url('user/hapus/semua'); ?>" class="btn btn-primary">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- order -->
                                <div class=" modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Order ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Lakukan Order ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <a href="<?= base_url('user/insert') ?>" class="btn btn-primary" rel="noopener noreferrer" onclick="location.reload();">Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>