<?php
include 'header.php';

if (isset($_GET['aksi']) == 'delete') {
    $kd_jenis = $_GET['kd_jenis'];
    $cek = mysqli_query($koneksi, "Select * FROM jenis WHERE kd_jenis='$kd_jenis'");
    if (mysqli_num_rows($cek) == 0) {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert"
          aria-hidden="true">&times;</button>Data Dengan Nip : ' . $kd_jenis . ' Tidak Ditemukan !</div>';
    }else{
        $delete = mysqli_query($koneksi, "DELETE FROM jenis WHERE kd_jenis='$kd_jenis'");
        if($delete){
            echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">&times;</button>Data Berhasil Dihapus.</div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">&times;</button>Data Gagal Dihapus.</div>';
        }
    }
}
if(isset ($_POST['tambah'])){
    $kd_jenis = $_POST['kd_jenis'];
    $n_jenis = $_POST['n_jenis'];

    $cek = mysqli_query($koneksi, "SELECT * FROM  jenis WHERE kd_jenis='$kd_jenis'");
    if (mysqli_num_rows($cek) == 0){
        $insert = mysqli_query($koneksi, "INSERT INTO jenis(kd_jenis,n_jenis)
      VALUES('$kd_jenis','$n_jenis')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>
			alert('Data Berhasil Disimpan !');
			location='jenis.php';
		  </script>";
        } else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data  Gagal Disimpan!</div>';
        }

    }

}

?>
<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_advanced_validation" method="POST">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Kode Produk</label>
                            <input type="text" class="form-control" name="kd_jenis" maxlength="50" minlength="0" placeholder="HL00021" required>
                            <div class="help-info">Min. Kerakter: 1, Max. Kerakter: 50</div>
                        </div>


                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Nama Produk</label>
                            <input type="text" class="form-control" name="n_jenis" maxlength="50" minlength="3"  placeholder="Herbalife Milk" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

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
                        <ul class="header-dropdown m-r--5">

                            <button data-toggle="modal" data-target="#exampleModal" class="btn bg-BLUE waves-effect" >
                                <i class="material-icons">local_mall</i>
                                <span>TAMBAH JENIS</span>
                            </button>
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
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Jenis</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead> <?php

                                $query="SELECT * FROM jenis ORDER by kd_jenis desc"  ;
                                $sql = mysqli_query($koneksi, "SELECT * FROM jenis");
                                $no=1;
                                //proses menampilkan data
                                while($rows=mysqli_fetch_object($sql)){

                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $rows -> kd_jenis?></td>
                                    <td><?php echo $rows -> n_jenis?></td>
                                    <td>
                                        <a class="btn bg-green waves-effect"href="ejenis.php?aksi=ubah&kd_jenis=<?= $rows -> kd_jenis; ?>" >
                                            <i class="material-icons">edit</i>
                                            <span>Edit</span></a>
                                        <a class="btn bg-red waves-effect" href="jenis.php?aksi=delete&kd_jenis=<?= $rows -> kd_jenis; ?>"
                                           onclick="return confirm('Anda Yakin Akan Menghapus')" title="Hapus Data" >
                                            <i class="material-icons">delete</i>
                                            <span>Hapus</span></a>
                                        </a>

                                    </td>
                                </tr>
                                <?php $no++;
                                }
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

