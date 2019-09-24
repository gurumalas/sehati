<?php
include 'header.php';
$id_supplier = $_GET['id_supplier'];
$sql = mysqli_query($koneksi, "Select * from supplier where id_supplier='$id_supplier'");

if (isset($_POST{'tambah'})) {
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $updatepic = mysqli_query($koneksi, "UPDATE supplier SET nama_supplier='$nama_supplier',
 alamat='$alamat', kontak='$kontak'
 WHERE id_supplier='$id_supplier'");
    $result = mysqli_query($koneksi, $updatepic);
    echo "<script>
			alert('Data Berhasil Diperbaharuai');
                location='supplier.php';
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
                                    $sql = mysqli_query($koneksi, "SELECT * FROM supplier where id_supplier='$id_supplier'");
                                    $no=1;
                                    //proses menampilkan data
                                    while($isi=mysqli_fetch_object($sql)){

                                    ?>
                                    <label>ID Supplier</label>
                                    <input type="text" class="form-control" name="id_supplier"
                                           value="<?= $isi->id_supplier; ?>" maxlength="50" minlength="3"
                                           placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Supplier</label>
                                    <input type="text" class="form-control" name="nama_supplier" maxlength="50"
                                           minlength="3" value="<?php echo $isi -> nama_supplier;?>" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" maxlength="50"
                                           minlength="1" value="<?php echo $isi -> alamat;?>" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Kontak</label>
                                    <input type="text" class="form-control" name="kontak" maxlength="50"
                                           minlength="1" value="<?php echo $isi -> kontak;?>" required>
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

