<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <?php if ($pesan == false) {
                    # code...
                } elseif ($pesan == "Anda Berhasil Absen Masuk") { ?>
                    <div class="alert alert-success" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php   } elseif ($pesan == "Anda Sudah Absen Masuk") { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php   } elseif ($pesan == "Anda Berhasil Absen Pulang") { ?>
                    <div class="alert alert-success" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php   } elseif ($pesan == "Anda Sudah Absen Pulang") { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $pesan ?>
                    </div>
                <?php }   ?>

                <form action="<?= base_url("user/absen_masuk") ?>" method="post">
                    <input type="hidden" name="tipe" value="Jam Masuk">
                    <button class="btn btn-primary btn-lg btn-block mb-1">Absen Masuk</button>
                </form>
                <form action="<?= base_url("user/absen_pulang") ?>" method="post">
                    <input type="hidden" name="tipe" value="Jam Pulang">
                    <button class="btn btn-secondary btn-lg btn-block mb-3">Absen Pulang</button>
                </form>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Absen</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>Lama Bekerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($absen as $x) { ?>


                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $x->tanggal ?></td>
                                <td><?= $x->jam_masuk ?></td>
                                <td><?= $x->jam_pulang ?></td>
                                <td><?php
                                    $waktu_awal = strtotime($x->jam_masuk);
                                    $waktu_akhir = strtotime($x->jam_pulang); // bisa juga waktu sekarang now()

                                    //menghitung selisih dengan hasil detik
                                    $diff = $waktu_akhir - $waktu_awal;

                                    //membagi detik menjadi jam
                                    $jam = floor($diff / (60 * 60));

                                    //membagi sisa detik setelah dikurangi $jam menjadi menit
                                    $menit = $diff - $jam * (60 * 60);

                                    //menampilkan / print hasil

                                    echo  $jam . " jam " . floor($menit / 60) . ' menit';
                                    ?>
                                </td>

                            <?php  } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>