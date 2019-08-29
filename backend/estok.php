<?php
include 'header.php';
$kd_produk = $_GET['kd_produk'];
$sql = mysqli_query($koneksi, "Select * from stok where kd_produk='$kd_produk'");

if (isset($_POST{'tambah'})) {

    $kd_produk = $_POST['kd_produk'];
    $beli = $_POST['beli'];
    $jual = $_POST['jual'];
    $banyak = $_POST['banyak'];
        $updatepic = mysqli_query($koneksi, "UPDATE stok SET beli='$beli', jual='$jual', banyak='$banyak'
 WHERE kd_produk='$kd_produk'");
        $result = mysqli_query($koneksi, $updatepic);
        echo "<script>
			alert('Data Berhasil Diperbaharuai');
                location='stok.php';
		  </script>";

}

?>

<section class="content">
    <div class="container-fluid">


        <!-- Exportable Table -->
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="modal-body">
                        <form id="form_advanced_validation" action="" enctype="multipart/form-data" method="POST">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <?php

                                    //                                        $query="SELECT * FROM produk ORDER by kd_produk desc"  ;
                                    $sql = mysqli_query($koneksi, "SELECT * FROM stok where kd_produk='$kd_produk'");
                                    $no=1;
                                    //proses menampilkan data
                                    while($isi=mysqli_fetch_object($sql)){

                                    ?>
                                    <label>Kode Produk</label>
                                    <input type="text" class="form-control" name="kd_produk"
                                           value="<?= $isi->kd_produk; ?>" maxlength="50" minlength="3"
                                           placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Beli Produk</label>
                                    <input type="text" class="form-control" name="beli" maxlength="50" minlength="3"
                                           value="<?= $isi->beli; ?>">
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Jual Produk</label>
                                    <input type="text" class="form-control" name="jual" maxlength="50"
                                           minlength="3" value="<?php echo $isi -> jual;?>" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Banyak Produk</label>
                                    <input type="text" class="form-control" name="banyak" maxlength="50"
                                           minlength="1" value="<?php echo $isi -> banyak;?>" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>


                            <div class="modal-footer">
                                <button type="submit" name="tambah" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                </button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
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

