<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <form class="form-inline mb-4" action="<?= base_url('user/cari') ?>" method="post">
                            <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Barang" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                        </form>
                        <!-- item -->
                        <div class="row">
                            <?php foreach ($data->result() as $x) : ?>
                                <div class="col-md-4 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-header"><?= $x->item; ?></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="card-text"> Satuan : <?= $x->satuan; ?></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="<?= base_url('user/order/' . $x->id); ?>" class="btn pull-right btn-primary">Order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- end menu item -->
                        </div>
                        <div class="row">
                            <div class="col">
                                <!--Tampilkan pagination-->
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>