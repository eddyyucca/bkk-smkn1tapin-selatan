 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Report</title>
     <style>
         th .a {
             height: 50px;
             padding-left: 10px;
             vertical-align: top;

         }

         table {
             border-collapse: collapse;
         }

         tr .bungkus {
             padding-left: 20px;
         }
     </style>
 </head>

 <body>
     <div class="container">
         <table border="3" class="c">
             <tr>
                 <th>
                     <table>
                         <tr align="left">
                             <th rowspan="2"><img src="<?= base_url('assets/img/hrs.png') ?>" width="50">
                             </th>
                             <th class="a">PT. Hasnur Riung Sinergi <br> BRE Mining Project</th>
                             <th width="295x"></th>
                         </tr>
                     </table>

                     <table border="1px" width="600px">
                         <th>DEPARTEMEN REQUEST</th>
                     </table>

                     <table class="b">
                         <tr align="left" width="600">
                             <th>Date</th>
                             <th>:</th>
                             <th><?php $no = 1;
                                    foreach ($data as $x) {
                                        if ($no++ > 1) break;
                                        echo $x->tanggal;
                                    }
                                    ?></th>
                         </tr>
                         <tr align="left" width="600">
                             <th>Departemen</th>
                             <th>:</th>
                             <th> <?= $departemen->nama_dep; ?>
                             </th>
                         </tr>
                     </table>

                     <table border=1 width="600px">
                         <thead>
                             <tr>
                                 <th colspan="6">SUMMARY OF REQUEST</th>
                             </tr>
                             <tr>
                                 <th>NO</th>
                                 <th>ITEM</th>
                                 <th>UNIT</th>
                                 <th>QUANTITY</th>
                                 <th>DESCRIPTION</th>
                             </tr>
                         </thead>

                         <?php
                            $no = 1;
                            foreach ($data as $x) { ?>
                             <tr>
                                 <td><?= $no++; ?></td>
                                 <td><?= $x->item ?></td>
                                 <td><?= $x->satuan ?></td>
                                 <td><?= $x->qty_order ?></td>
                                 <td></td>
                             </tr>

                         <?php } ?>
                     </table>
                     <br>
                     <table border="1" width="600px">
                         <tr>
                             <th>Request By,</th>
                             <th>Acknowledge,</th>
                             <th>Received by,</th>
                         </tr>
                         <tr>
                             <th> <br><br><br> </th>
                             <th> <br><br><br> </th>
                             <th> <br><br><br> </th>
                         </tr>
                         <tr>
                             <th>Dept Head</th>
                             <th>HRGS Dept Head</th>
                             <th>Group Leader HRGS</th>
                         </tr>
                     </table>
                     <br>
                     <table border=1 width="600px">
                         <th>Form ini digunakan sebagai dasar pembuatan GR oleh HRGS Dept</th>
                     </table>
                 </th>
             </tr>
         </table>
     </div>
 </body>
 <script>
     window.print()
 </script>

 </html>