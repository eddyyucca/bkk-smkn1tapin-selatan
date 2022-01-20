<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user/proses_ubah_password/') . $data->telpon ?>" method="POST">
                        <table class="table">

                            <tr>
                                <td width=20%>Tentang Saya</td>
                                <textarea name="tentang_saya" cols="30" rows="10"></textarea>
                            </tr>

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