<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Barang Alat Tulis Kantor</h6>
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
                            <?php foreach ($databarang as $x) : ?>
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= substr($x->item, 0, 30);
                                                                        echo "..."  ?></h5>
                                            <p class="card-text"><?= $x->satuan; ?></p>
                                            <a href="<?= base_url('user/order/' . $x->id); ?>" class="btn btn-primary">Order</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- end menu item -->
                        </div>
                        <div class="row">
                            <div class="col">
                                <!--Tampilkan pagination-->

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>