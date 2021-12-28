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
                                <table>
                                    <tr align="left">
                                        <th rowspan="2"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
                                        </th>
                                    </tr>
                                </table>
                                <br>
                                <hr>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                                    <div class="container">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User</th>
                                                <th>Bidang</th>
                                                <th>Tanggal</th>
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

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                </table>
                                <table border="0">
                                    <tr align="right">
                                        <br><br>
                                        <td align="right" colspan="6">
                                            <img src=" <?= base_url('assets/ttd.png') ?>" width="40%">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.print()
</script>