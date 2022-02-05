<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Pelamar.xls");

?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold ">Data Pelamar</h1>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lowongan</th>
                            <th>Perusahaan/Instansi</th>
                            <th>Nama Pemohon</th>
                            <th>Jurusan SMK</th>
                            <th>Tahun Lulus SMK</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Telpon</th>
                            <th>Alamat</th>
                            <th>Curriculum Vitae</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_lowongan; ?></td>
                                <td><?= $x->nama_perusahaan; ?></td>
                                <td><?= $x->nama_alumni; ?></td>
                                <td><?= $x->nama_jurusan; ?></td>
                                <td><?= $x->tahun_lulus; ?></td>
                                <td><?= $x->pendidikan_t; ?></td>
                                <td><?= $x->tgl_lahir; ?></td>
                                <td><?= $x->agama; ?></td>
                                <td><?= $x->telpon; ?></td>
                                <td><?= $x->alamat; ?></td>

                                <td align="center">
                                    <a href="http://localhost/bkk/kode/x/<?= (base64_encode($x->data_pdf)) ?>">Cek CV</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>