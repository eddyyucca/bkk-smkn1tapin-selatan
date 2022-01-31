<div class="container col-12">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Lowongan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table>
                    <tr>
                        <td>Nama Lowongan</td>
                        <td>:</td>
                        <td><?= $data->nama_lowongan ?></td>
                    </tr>
                    <tr>
                        <td>Nama Perusahaan/Instansi</td>
                        <td>:</td>
                        <td><?= $data->nama_perusahaan ?></td>
                    </tr>
                    <tr>
                        <td>Batas Waktu</td>
                        <td>:</td>
                        <td><?= $data->batas_tanggal ?></td>
                    </tr>
                    <tr>
                        <td>Isi Lowongan</td>
                        <td>:</td>
                        <td><?= $data->isi_lowongan ?></td>
                    </tr>
                    <tr>
                        <td>
                            <hr>
                        </td>
                        <td>
                            <hr>
                        </td>
                        <td>
                            <hr>
                        </td>
                    </tr>
                    <tr>

                        <td><img class="shadow" <?php
                                                if ($data->foto == false) { ?> src="<?= base_url('assets/images/default.png') ?>" <?php
                                                                                                                                } else {
                                                                                                                                    ?> src="<?= base_url('assets/foto/' . $data->foto) ?>" <?php
                                                                                                                                                                                        } ?> "
                              alt=" Sarana" class="card-img-top" data-holder-rendered="true" style="height: 375px; width: 325px; display: block;">


                        </td>

                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>

                        </td>

                    </tr>
                </table>
                <form action="<?= base_url('user/kirim_lamaran/' . $data->id_lowongan)  ?>" method="post">
                    <td>
                        <input type="hidden" name="status" value="1">
                        <button class="btn btn-primary">Kirim Lamaran Anda</button>
                    </td>
                </form>
            </div>
        </div>
    </div>
</div>