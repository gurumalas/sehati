<?php include 'header.php'?>
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
                            <i class="material-icons">contact_mail</i>
                        </div>
                        <div class="content">
                            <div class="text">PESANAN BARU</div>
                            <?php
                            // Counter Data Per Kolom tanpa kondisi
                            $bkirim = $koneksi->query("SELECT * FROM invoice WHERE status=0");
                            $jbkirim = mysqli_num_rows($bkirim);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jbkirim;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">redeem</i>
                        </div>
                        <div class="content">
                            <div class="text">PRODUK</div>
                            <?php
                            // Counter Data Per Kolom tanpa kondisi
                            $produk = $koneksi->query("SELECT * FROM produk WHERE kd_produk");
                            $jproduk = mysqli_num_rows($produk);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jproduk;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">local_shipping</i>
                        </div>
                        <div class="content">
                            <div class="text">PESENAN TERKIRIM</div>
                            <?php
                            // Counter Data Per Kolom tanpa kondisi
                            $kirim = $koneksi->query("SELECT * FROM invoice WHERE status='1'");
                            $jkirim = mysqli_num_rows($kirim);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jkirim;?>"" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">MEMBER</div>
                            <?php
                            // Counter Data Per Kolom tanpa kondisi
                            $membernya = $koneksi->query("SELECT * FROM member WHERE nik");
                            $jmember = mysqli_num_rows($membernya);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jmember;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                    <h1>PESANAN <code>BARU</code> !</h1>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Transaksi</th>
                                            <th>NIK Pembeli</th>
                                            <th>Status</th>
                                            <th>Harga X Jumlah</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php


                                    if (isset($_GET['act']) == 'ubah') {

                                        $kd_invoice = $_GET['kd_invoice'];
//                                        $status = $_POST['status'];
                                        $ubahkan = "UPDATE invoice SET status='1' WHERE kd_invoice='$kd_invoice'";
                                        mysqli_query($koneksi, $ubahkan);
                                    }

                                    $sqlinvoice = mysqli_query($koneksi, "SELECT * FROM invoice where status='0' or status=''");
                                    $no=1;
                                    //proses menampilkan data

                                    while($rowsinvoice=mysqli_fetch_object($sqlinvoice)) {
//                                        $no=1;


                                        ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $no?></td>
                                            <td><a><?php if (($rowsinvoice->kd_transaksi)=='') {
                                                echo 'Tidak Member';
                                                    } else {
                                                        echo $rowsinvoice->kd_transaksi;
                                                    }?></a></td>
                                            <td><?php echo $rowsinvoice->nik?></td>
                                            <td><?php  if (($rowsinvoice->status) ==1) {
                                                echo  '<span class="label bg-green">Lunas</span>';
                                                } else {
                                                echo '<span class="label bg-red">Belum Lunas</span>';
                                                }?>
                                               </td>
                                            <td><?php echo $rowsinvoice->quantity.' X '.format_rupiah($rowsinvoice->harga)?></td>
                                            <td><?php echo format_rupiah($rowsinvoice->totalbyar)?></td>
                                            <td>

                                                    <a href="index.php?act=ubah&kd_invoice=<?php echo $rowsinvoice->kd_invoice?>"><span class="label bg-blue">Lunas</span></a>

                                            </td>
                                        </tr>
                                        </tbody>
                                        <?php
                                        $no++;
                                    }

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
