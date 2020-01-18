<?php
include 'header.php';

if (isset($_GET['aksi']) == 'delete') {
    $nik = $_GET['nik'];
    $cek = mysqli_query($koneksi, "Select * FROM member WHERE nik='$nik'");
    if (mysqli_num_rows($cek) == 0) {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert"
          aria-hidden="true">&times;</button>Data Dengan Nik : ' . $nik . ' Tidak Ditemukan !</div>';
    }else{
        $delete = mysqli_query($koneksi, "DELETE FROM member WHERE nik='$nik'");
        if($delete){
            echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">&times;</button>Data Berhasil Dihapus.</div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">&times;</button>Data Gagal Dihapus.</div>';
        }
    }
}
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
                            DATA BEST MEMBER
                        </h2>
                        <ul class="header-dropdown m-r--5">


                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <a class="btn btn-primary" name="" href="../laporan/laporanbestmember.php" target="_blank">Cetak Semua Data</a>
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nik</th>
                                    <th>Banyak Transaksi</th>

                                    <th>Aksi</th>
                                </tr>
                                </thead> <?php

//                                $query="SELECT * FROM member ORDER by nik desc"  ;
//                                SELECT username, COUNT(*) duplikat FROM users GROUP BY username HAVING COUNT(duplikat)  > 1
                                $sql = mysqli_query($koneksi, "SELECT invoice.*, count(invoice.nik) duplikat FROM invoice
                                where  not nik=0
                                group by nik ");
//                                having count(duplikat)
                                $no=1;

                                //proses menampilkan data

                                while($rows=mysqli_fetch_object($sql)){

                                ?>
                                <tbody>

                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php
                                        if(($rows->nik)==0) {
                                            echo 'Bukan Member';
                                        } else echo $rows->nik?></td>
                                    <td><?php echo $rows->duplikat ?></td>

                                    <td>
                                        <a target="_blank" class="btn bg-black waves-effect"href="../laporan/profilmember.php?nik=<?= $rows -> nik; ?>" >
                                            <i class="material-icons">print</i>
                                            <span>Cetak</span></a>


                                    </td>
                                </tr>
                                <?php
                                $no++;}
                                ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
<?php
//include 'footer.php';
?>
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

<!-- Jquery DataTable Plugin Js -->
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>


<!-- Bootstrap Notify Plugin Js -->
<script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>


<!-- SweetAlert Plugin Js -->
<script src="plugins/sweetalert/sweetalert.min.js"></script>

<!-- Custom Js -->
<script src="js/pages/ui/dialogs.js"></script>



</body>

</html>

