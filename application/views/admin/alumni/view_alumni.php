<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesanan'); ?>
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Profil <?= $data->nama_alumni ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img class="shadow" <?php
                                            if ($data->foto_profil == false) { ?> src="<?= base_url('assets/images/default.png') ?>" <?php
                                                                                                                                    } else {
                                                                                                                                        ?> src="<?= base_url('assets/foto_profil/' . $data->foto_profil) ?>" <?php
                                                                                                                                                                                                            } ?> "
                              alt=" Sarana" class="card-img-top" data-holder-rendered="true" style="height: 275px; width: 225px; display: block;">


                    </div>
                    <div class="col-6">

                        <hr>
                        <?php
                        function hitung_umur($tanggal_lahir)
                        {
                            list($year, $month, $day) = explode("-", $tanggal_lahir);
                            $year_diff  = date("Y") - $year;
                            $month_diff = date("m") - $month;
                            $day_diff   = date("d") - $day;
                            if ($month_diff < 0) $year_diff--;
                            elseif (($month_diff == 0) && ($day_diff < 0)) $year_diff--;
                            return $year_diff;
                        }
                        ?>
                        <table class="mt-2 ml-3">
                            <tr>
                                <td> Nama</td>
                                <td>: <?= $data->nama_alumni ?> </td>
                            </tr>
                            <tr>
                                <td> Tanggal Lahir </td>
                                <td>: <?= $data->tgl_lahir ?> </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td>: <?= $data->alamat ?> </td>
                            </tr>
                            <tr>
                                <td> Email </td>
                                <td>: <?= $data->email ?> </td>
                            </tr>
                            <tr>
                                <td> No Telpon </td>
                                <td>: <?= $data->telpon ?> </td>
                            </tr>
                            <tr>
                                <td> Lulusan</td>
                                <td>: <?= $data->nama_jurusan ?> </td>
                            </tr>
                            <tr>
                                <td> Tahun Lulus SMK</td>
                                <td>: <?= $data->tahun_lulus ?> </td>
                            </tr>
                        </table>
                        <hr>
                        <!-- tentang saya -->
                        <tr>
                            <td>Tentang Saya</td>
                            <td>: <?= $data->tentang_saya ?> </td>
                        </tr>
                        <br>

                        <!-- cv -->

                        <br>

                        <a class="btn btn-primary mb-1" href="<?= base_url('./assets/file/' . $data->data_pdf) ?>">Data PDF Lengkap</a>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>



    </div>