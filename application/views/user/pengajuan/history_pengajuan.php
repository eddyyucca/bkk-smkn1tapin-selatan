<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel History Pengajuan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->date; ?></td>
                                <td><?= $x->status_pengajuan; ?></td>
                                <td>
                                    <?php if ($x->file == false) { ?>

                                    <?php   } elseif ($x->file == true) { ?>

                                        <a href="<?= base_url('assets/file_pengajuan/' . $x->file) ?>" target="_blank" class="btn btn-primary">Cek Berkas</a>
                                    <?php  } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>