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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="container">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>TANGGAL</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        if ($data == false) {
                                            echo "<td colspan='5'  align='center'>
                                            <h1>Data Kosong</h1>
                                            </td>";
                                        } else {
                                            foreach ($data as $x) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $x->tanggal; ?></td>
                                                        <td><?php
                                                            if ($x->status == "4") {
                                                                echo "Ditolak";
                                                            } elseif ($x->status == "3") {
                                                                echo "Menunggu Disetujui";
                                                            } elseif ($x->status == "2") {
                                                                echo "Di Proses";
                                                            } elseif ($x->status == "1") {
                                                                echo "Selesai";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        <?php }
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