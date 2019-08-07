<?php
include 'header.php';
//include '../aksinya/fungsi.php';
//include '../aksinya/koneksi.php';


?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                JQUERY DATATABLES
                <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
            </h2>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXPORTABLE TABLE
                        </h2>


                    </div>


                        <form class="form-horizontal form-label-left" action="../laporan/laporankeuangan.php?dari=<?php echo $data['bulan1']; ?>&akhir=<?php echo $data['bulan2']; ?>" method="get">


                                    <label class="col-xs-1">Dari</label>
                                    <div class="col-md-2">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type="date" name="bulan1" class="form-control"value="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>

                                    </div>
                                </div>
                                    <label class="col-xs-1">Sampai</label>
                                    <div class="col-md-2">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type="date" name="bulan2" class="form-control" value="">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                        </div>
                                </div>
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                              <button type="submit" class="btn btn-sl btn-primary"><i class="fa fa-download m-right-ml"> EXSPORT PDF</i> </button>
                    </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable ">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Rincian Total</th>
                                    <th>SubTotal</th>
                                </tr>
                                </thead> <?php
                                include '../aksinya/koneksi.php';
                                $sqlku = mysqli_query($koneksi, "SELECT * FROM invoice order by status asc");
                                $no=1;
                                $semua =0;
                                //proses menampilkan data
                                while($rows=mysqli_fetch_object($sqlku)){
                                $subtotal= $rows ->totalbyar;
                                $semua=$semua+$subtotal;
                                ?>
                                <tbody>
                                <tr>

                                    <td><?php echo $no?></td>
                                    <td><?php echo $rows -> kd_transaksi?></td>
                                    <td><?php echo konversi_tanggal($rows -> tgl);?></td>
                                    <td><?php echo $rows ->quantity.'x'.format_rupiah($rows ->harga)?></td>
                                    <td><?php echo format_rupiah($rows ->totalbyar)?></td>


                                </tr>
                                <?php $no++;
                                }
                                ?>

                                </tbody>
                                <th colspan="5"><p style="text-align: right">Jumlah
                                    <?php

                                    echo format_rupiah($semua);
                                    ?></p></th>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>

<?php include 'footer.php';?>


</body>

</html>

