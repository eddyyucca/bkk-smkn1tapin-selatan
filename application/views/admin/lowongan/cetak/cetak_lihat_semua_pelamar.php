<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Pelamar.xls");

?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Pelamar</h6>
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
                            <th>Pendidikan Terakhir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Telpon</th>
                            <th>Foto</th>
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