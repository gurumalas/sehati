<?php
$kd_jenis = $_GET['kd_jenis'];
include 'header.php';
$sql = mysqli_query($koneksi, "SELECT * FROM jenis");
$isi = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) == 0) {
}
?>
<?php
if(isset ($_POST{'ubah'})){
    include '../aksinya/koneksi.php';
    $kd_jenis = $_POST['kd_jenis'];
    $n_jenis = $_POST['n_jenis'];
        $ubahkan = mysqli_query($koneksi, "UPDATE jenis SET n_jenis='$n_jenis' WHERE kd_jenis='$kd_jenis'");
    if($ubahkan){
        echo "<script>
			alert('Data Berhasil Disimpan !');
			location='jenis.php';
		  </script>";
    } else{
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data  Gagal Disimpan!</div>';
    }
}

?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>

                <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
            </h2>
        </div>

        <!-- Advanced Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>TAMBAH DATA</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Kode Produk</label>
                                    <input type="text" value="<?php echo $isi['kd_jenis'] ?>" class="form-control" name="kd_jenis" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>


                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Nama Produk</label>
                                    <input type="text" value="<?php echo $isi['n_jenis'] ?>"  class="form-control" name="n_jenis" maxlength="50" minlength="3"  placeholder="Herbalife Milk" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" name="ubah" type="submit">  <i class="material-icons">save</i><span>Simpan</span></button>
                            <button class="btn btn-success waves-effect" type="reset">  <i class="material-icons">refresh</i><span>Reset</span></button>
                            <a class="btn btn-danger waves-effect" href="jenis.php">  <i class="material-icons">exit_to_app</i><span>Kembali</span></a>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Validation -->

    </div>
</section>
<?php
include 'footer.php';
?>
</body>

</html>
