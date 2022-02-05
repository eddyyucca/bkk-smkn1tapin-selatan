<div class="container-fluid">
    <!-- Page Heading -->
    <table>
        <tr align="left">
            <th rowspan="2"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
            </th>
        </tr>
    </table>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold ">Lowongan Aktif</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lowongan</th>
                            <th>Perusahaan/Instansi</th>
                            <th>Batas Waktu</th>
                            <th>Rincian Lowongan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <?php if ($x->batas_tanggal < date('Y-m-d')) {
                            } else { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->nama_lowongan; ?></td>
                                    <td><?= $x->nama_perusahaan; ?></td>
                                    <td><?= $x->batas_tanggal; ?></td>
                                    <td><?= $x->isi_lowongan; ?></td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    window.print()
</script>