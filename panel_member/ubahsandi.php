<?php
$nik = $_GET['nik'];
include 'header.php';
$sql = mysqli_query($koneksi, "SELECT * FROM member where nik='$nik'");
$isi = mysqli_fetch_assoc($sql);
//if(mysqli_num_rows($sql) == 0) {
//}
?>
<?php
if(isset ($_POST{'ubah'})){
    include '../aksinya/koneksi.php';

    $password = md5(trim($_POST['password']));
    $ubahkan = mysqli_query($koneksi, "UPDATE member SET password='$password' WHERE nik='$nik'");
    if($ubahkan){
        echo "<script>
			alert('Data Berhasil Disimpan !');
			location='index.php';
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
                        <h2>EDIT Password</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Password</label>
                                    <input type="text" value="<?php echo $isi['password']; ?>" class="form-control" name="password" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" name="ubah" type="submit">  <i class="material-icons">save</i><span>Simpan</span></button>
                            <button class="btn btn-success waves-effect" type="reset">  <i class="material-icons">refresh</i><span>Reset</span></button>
                            <a class="btn btn-danger waves-effect" href="index.php">  <i class="material-icons">exit_to_app</i><span>Kembali</span></a>

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
