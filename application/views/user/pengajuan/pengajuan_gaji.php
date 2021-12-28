<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user/pengajuan_baru/') . $data->nip ?>" method="POST" enctype="multipart/form-data">
                        <table class="table">
                            <?= $pesan; ?>
                            <?php if (validation_errors() == false) {
                            } else { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors() ?>
                                </div>
                            <?php } ?>

                            <?php
                            $waktu_asli = substr($waktu->date, 0, 4);

                            $waktu_tahun = $waktu_asli + 2;

                            $waktu_sekarang = date('Y');
                            if ($waktu_tahun <= $waktu_sekarang) { ?>
                                <tr>
                                    <td width=20%>Upload SK Terakhir</td>
                                    <td><input type="file" name="file" class="form-control" placeholder="SK Terakhir" required></td>
                                </tr>

                            <?php } else { ?>
                                <tr>
                                    <td width=20%>Upload SK Terakhir</td>
                                    <td><input type="file" name="file" class="form-control" placeholder="SK Terakhir" required disabled></td>
                                </tr>
                            <?php  } ?>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>