<?php
include 'header.php';
//include '../aksinya/fungsi.php';
//$cek = mysqli_query($koneksi, "Select * from produk");
//if(isset($_GET['delete'])){
//    $kd_produk= $_GET['kd_produk'];
//    $delete = mysqli_query($koneksi, "DELETE FROM produk WHERE kd_produk='$kd_produk'");
//}
//
//if (isset($_POST["tambah"])) {
//    $kd_produk = $_POST['kd_produk'];
//
//    $kd_jenis = $_POST['kd_jenis'];
//
//    $harga = $_POST['harga'];
//    $deskripsi = $_POST['deskripsi'];
//    $foto_file = $_POST['foto_file'];
//    $nama = "1463";
//    $dir_upload = "../images/";
//    $nama_file = $_FILES['foto_file']['name'];
////    $nama_file = $kd_produk.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);
//    $x                 = explode('.', $nama_file);
//    $extension         = strtolower(end($x));
//    $namabaru             = $nama_file . '.' . $extension;
//    //
//    if (is_uploaded_file($_FILES['foto_file']['tmp_name'])) {
////        'Whatevernameyouwant.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
//        $masuk = move_uploaded_file($_FILES['foto_file']['tmp_name'],
//            $dir_upload . $nama_file);
//
//        $mysqli = "INSERT INTO produk(kd_produk,foto_file,kd_jenis,harga,deskripsi) VALUES ('$kd_produk','$nama_file','$kd_jenis','$harga','$deskripsi')";
//        $result = mysqli_query($koneksi, $mysqli) or die("gagal " . mysqli_error($koneksi));
//        $cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE kd_produk='$kd_produk'");
//        if ($cek) {
//        } else {
//            die ("File gagal diupload");
//        }
//    }
//}

?>


<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_advanced_validation" action="" enctype="multipart/form-data" method="POST">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Kode Produk</label>
                            <input type="text" class="form-control" name="kd_produk" maxlength="50" minlength="3" placeholder="HL00021" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Nama Produk</label>
                            <input type="text" class="form-control" name="nama" maxlength="50" minlength="3"  placeholder="Herbalife Milk" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Pilih Jenis</label>
                            <select name="kd_jenis" class="form-control selectpicker" data-live-search="true" style="width: 100%;" required>
                                <option value="">Pilih Jenis</option>
                                <?php
//                                include "../aksinya/koneksi.php";
//                                $query = "SELECT * from jenis";
//                                $hasil = mysqli_query($koneksi,$query);
//                                while ($data = mysqli_fetch_array($hasil))
//                                {
//                                    echo "<option value=$data[n_jenis]>$data[kd_jenis]&nbsp;-&nbsp;$data[n_jenis]</option>";
//                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Harga</label>
                            <input type="text" class="form-control" name="harga" maxlength="50" minlength="3"  placeholder="Herbalife Milk" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Deskripsi</label>
                            <textarea name="deskripsi" class="form-control no-resize" required></textarea>

                        </div>
                    </div>
                    <div class="form-group form-float"  class="dropzone">
                        <div class="dz-message">
                            <div class="drag-icon-cph">
                                <i class="material-icons">touch_app</i>
                            </div>
                            <h3>Drop files here or click to upload.</h3>
                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                        </div>
                        <div class="fallback">
                            <label >Foto</label>
                            <input type="file" multiple  name="foto_file"  required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="tambah" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>


    </div>
</div>
</div>
</form>
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
                    
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Kode Produk</th>
                                    <th>Status</th>
                                    <th>Banyak</th>
                                    <th>Banyak X Harga</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead> <?php
//                                include '../aksinya/koneksi.php';
                                $nik = $_GET['nik'];
                                $sqlku = mysqli_query($koneksi, "SELECT * FROM invoice WHERE nik='$nik'");
                                $no=1;
                                //proses menampilkan data
                                while($rows=mysqli_fetch_object($sqlku)){

                                ?>
                                <tbody>
                                <tr>

                                    <td><?php echo $no?></td>
                                    <td><?php echo $rows -> kd_transaksi?></td>
                                    <td><?php echo konversi_tanggal($rows -> tgl);?></td>
                                    <td><?php echo $rows -> kd_produk?></td>
                                    <td><?php
                                        if (($rows->status) == 0) {
                                            echo '<p style="color: #e80012">Belum Lunas</p>';
                                        } else {
                                            echo '<p style="color:#11e800">Lunas</p>';
                                        }?></td>
                                    <td><?php echo $rows ->quantity?></td>
                                    <td><?php echo $rows ->quantity.'x'.format_rupiah($rows ->harga)?></td>
                                    <td><?php echo format_rupiah($rows ->totalbyar)?></td>
                                    <td><a class="btn btn-danger waves-effect" href="../laporan/laporantransaksi.php?kd_transaksi=<?php echo $rows->kd_transaksi;?>">
                                            <i class="material-icons">book</i><span></span></a>
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

<?php include 'footer.php';?>


</body>

</html>

