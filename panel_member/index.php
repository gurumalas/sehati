<?php include 'header.php';
$nik = $_GET['nik'];

$belumtuntassql = $koneksi->query("SELECT * FROM invoice where  status='0' and nik='$nik'");
$belumtuntas = mysqli_num_rows($belumtuntassql);
$sudahtuntassql = $koneksi->query("SELECT * FROM invoice where  status='1' and nik='$nik'");
$sudahtuntas = mysqli_num_rows($sudahtuntassql);

?>
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Lunas Bayar</div>

                            <div class="number count-to" data-from="0" data-to="<?php echo $sudahtuntas;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Belum Bayar</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $belumtuntas;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- #END# Widgets -->


            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h1>PESANAN <code>BARU</code> !</h1>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <?php
                                $sqlinvoice = mysqli_query($koneksi, "SELECT * FROM invoice where nik='$nik'");
                                while($rowsinvoice=mysqli_fetch_object($sqlinvoice))
                                ?>
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Transaksi</th>
                                        <th>NIK Pembeli</th>
                                        <th>Status</th>
                                        <th>Harga X Jumlah</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $sqlinvoice = mysqli_query($koneksi, "SELECT * FROM invoice where nik='$nik'");
                                    $no=1;
                                    //proses menampilkan data
//                                    if($rowsinvoice=mysqli_fetch_object($sqlinvoice)=='0'){
//                                        echo "<tr><td colspan='25'>Data Tidak Ada.</td></tr>";
//                                    }else{
                                    while($rowsinvoice=mysqli_fetch_object($sqlinvoice))
                                    {
//                                        $no=1;


                                        ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $no?></td>
                                            <td><a><?php echo $rowsinvoice->kd_transaksi?></a></td>
                                            <td><?php echo $rowsinvoice->nik?></td>
                                            <td><?php  if (($rowsinvoice->status) ==1) {
                                                    echo  '<span class="label bg-green">Lunas</span>';
                                                } else {
                                                    echo '<span class="label bg-red">Belum Lunas</span>';
                                                }?>
                                            </td>
                                            <td><?php echo $rowsinvoice->quantity.' X '.format_rupiah($rowsinvoice->harga)?></td>
                                            <td><?php echo format_rupiah($rowsinvoice->totalbyar)?></td>

                                        </tr>
                                        </tbody>
                                        <?php
                                        $no++;
                                    }
//}

                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
