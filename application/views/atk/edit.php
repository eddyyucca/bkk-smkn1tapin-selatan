<!-- Begin Page Content -->
<div class="container col-8">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('atk/view_data') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <?php
                    if ($data == false) {
                        echo "<h1>Data Kosong</h1>";
                    } else { ?>


                        <form action="<?= base_url('atk/prosesEdit/') . $data->id;  ?>" method="POST">
                            <div class="form-group">
                                <label for="inputItem">Item</label>
                                <input type="text" class="form-control" id="item" name="item" placeholder="Nama Item Barang" value="<?= $data->item; ?>">
                            </div>

                            <div class="form-group">
                                <label for="Quantity">Quantity</label>
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity" value="<?= $data->qty; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Description">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan" value="<?= $data->satuan; ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>