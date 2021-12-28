<div class="container col-8">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            Item
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto">
                            <form action="<?= base_url('atk/ProsesOrder/' . $data->id); ?>" method="post">
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Nama item <h3><?= $data->item; ?></h3>
                                            </h3>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h3>Jumlah stok <?= $data->qty; ?></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H4>Order</H4> <input step="1" data-step-max="10" type="number" id="inputLoop" value="1" data-decimals="0" min="1" max="<?= $data->qty; ?>">
                                            <button type="submit" class="btn btn-primary">Order</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>