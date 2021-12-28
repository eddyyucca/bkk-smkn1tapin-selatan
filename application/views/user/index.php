<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesanan'); ?>
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Profil <?= $data->nama_lengkap ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img class="shadow" <?php
                                            if ($data->foto == false) { ?> src="<?= base_url('assets/images/default.png') ?>" <?php
                                                                                                                            } else {
                                                                                                                                ?> src="<?= base_url('assets/foto_profil/' . $data->foto) ?>" <?php
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
                                <td>: <?= $data->nama_lengkap ?> </td>
                            </tr>
                            <tr>
                                <td> TTL </td>
                                <td>: <?= $data->tempat ?> <?= $data->ttl ?> </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td>: <?= $data->alamat_saat_ini ?> </td>
                            </tr>
                            <tr>
                                <td> Email </td>
                                <td>: <?= $data->email ?> </td>
                            </tr>
                            <tr>
                                <td> No Telpon </td>
                                <td>: <?= $data->no_telp ?> </td>
                            </tr>
                            <tr>
                                <td> Lulusan</td>
                                <td>: Teknik Komputer & Jaringan (TKJ)</td>
                            </tr>
                        </table>
                        <hr>
                        <a class="btn btn-primary mb-1" href="">Tentang Saya</a>
                        <a class="btn btn-primary mb-1" href="">Curriculum Vitae</a>
                        <a class="btn btn-primary mb-1" href="">Ijazah Terakhir & Lainnya</a>
                        <a class="btn btn-primary mb-1" href="">SKCK</a>
                        <a class="btn btn-primary mb-1" href="">Sertifikat Keahlian</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>



    </div>