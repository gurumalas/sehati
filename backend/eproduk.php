<?php
include 'header.php';
$kd_produk = $_GET['kd_produk'];
$sql = mysqli_query($koneksi, "Select * from produk where kd_produk='$kd_produk'");

if (isset($_POST{'tambah'})) {

    $kd_produk = $_POST['kd_produk'];
    $nama = $_POST['nama'];
    $foto_file = $_POST['foto_file'];
    $kd_jenis = $_POST['kd_jenis'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $dir_upload = "../images/";
    $nama_file = $_FILES['foto_file']['name'];
    $x = explode('.', $nama_file);
    $extension = strtolower(end($x));
    $namabaru = '' . '.' . $extension;
    if (is_uploaded_file($_FILES['foto_file']['tmp_name'])) {
        $masuk = move_uploaded_file($_FILES['foto_file']['tmp_name'],
            $dir_upload . $nama_file);
        $updatepic = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', foto_file='$nama_file', kd_jenis='$kd_jenis'
 harga='$harga', deskripsi='$deskripsi' WHERE kd_produk='$kd_produk'");
        $result = mysqli_query($koneksi, $updatepic);
        echo "<script>
			alert('Data Berhasil Diperbaharuai');
                location='produk.php';
		  </script>";
    }
    elseif ((is_uploaded_file($_FILES['foto_file']['tmp_name'])) == '') {
        $update = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', kd_jenis='$kd_jenis', harga='$harga', deskripsi='$deskripsi' 
 WHERE kd_produk='$kd_produk'");
        $result = mysqli_query($koneksi, $update);
        echo "<script>
			alert('Data Berhasil Diperbaharuai Dan Foto TIDAK DI UBAH');
			location='produk.php';
		  </script>";
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
                                EXPORTABLE TABLE
                            </h2>

                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" action="" enctype="multipart/form-data" method="POST">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <?php

//                                        $query="SELECT * FROM produk ORDER by kd_produk desc"  ;
                                        $sql = mysqli_query($koneksi, "SELECT * FROM produk where kd_produk='$kd_produk'");
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
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" name="nama" maxlength="50" minlength="3"
                                              value="<?= $isi->nama; ?>">
                                        <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Pilih Jenis</label>
                                        <select name="kd_jenis" class="form-control selectpicker"
                                                data-live-search="true" style="width: 100%;" required>
                                            <?php
                                            include "../aksinya/koneksi.php";
                                            $query = "SELECT * from jenis";
                                            $hasil = mysqli_query($koneksi, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                ?>
                                            <option value="<?php echo $isi -> kd_jenis?>">Pilih Jenis</option>
                                           <?php
                                                echo "<option name='kd_jenis' value='$data[n_jenis]'>$data[kd_jenis]&nbsp;-&nbsp;$data[n_jenis]</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <div class="help-info"><p><?php echo $isi -> kd_jenis;?></p></div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" name="harga" maxlength="50"
                                               minlength="3" value="<?php echo $isi -> harga;?>" required>
                                        <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control no-resize" required><?php echo $isi -> deskripsi; ?></textarea>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Foto</label>
                                        <input type="file" class="form-control" name="foto_file"
                                               placeholder="Herbalife Milk">
                                        <!--                            <input type="file" name='foto'>-->
                                        <div class="help-info">Max. Kerakter: 10 MB</div>
                                    </div>

                                </div>

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

