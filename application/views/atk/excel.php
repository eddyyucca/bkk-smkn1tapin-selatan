<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Barang $date.xls");
?>

<table border="0">
    <tr align="center" width="400">
        <td colspan="4"><img src="<?= base_url('assets/cop.png') ?>" width="50%"></td>
    </tr>
    <tr>
        <td><br><br>
        <td><br><br>
    </tr>
    <tr>
        <td><br><br>
        <td><br><br>
    </tr>

</table>
<table border="1">
    <tr align="center">
        <td colspan="9">
            DATA ATK
        </td>
    </tr>

    <tr>
        <td width="90%">
            No.
        </td>
        <td width="90%" colspan="5">
            Item
        </td>
        <td width="90%" colspan="2">
            Jumlah
        </td>
        <td width="90%" colspan="1">
            Satuan
        </td>
    </tr>

    <?php $no = 1; ?>
    <tr>
        <?php foreach ($data as $x) { ?>


            <td align="center" width="90%">
                <?= $no++; ?>
            </td>
            <td width="90%" colspan="5">
                <?= $x->item; ?>
            </td>
            <td colspan="2" align="center" width="90%">
                <?= $x->qty; ?>
            </td>
            <td colspan="1">
                <?= $x->satuan; ?>
            </td>
    </tr>
<?php } ?>
</table>