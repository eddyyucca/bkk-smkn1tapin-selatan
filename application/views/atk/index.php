<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            Barang ATK
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <!-- item -->
                    <div class="row">
                        <?php foreach ($data as $x) : ?>
                            <div class="col-md-4 col-lg-4 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $x->item; ?></h5>
                                        <p class="card-text"><?= $x->satuan; ?></p>
                                        <a href="<?= base_url('atk/order/' . $x->id); ?>" class="btn btn-primary">Order</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- end menu item -->
                    </div>
                    <!--Tampilkan pagination-->
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>