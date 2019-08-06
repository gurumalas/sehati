<?php
$nik = $_GET['nik'];
include 'header.php';
$sql = mysqli_query($koneksi, "SELECT * FROM member where nik='$nik'");
$isi = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) == 0) {
}
?>
<?php
if(isset ($_POST{'ubah'})){
    include '../aksinya/koneksi.php';
    //$nik = $_GET['nik'];
    $n_member = $_POST['n_member'];
    $jk = $_POST['jk'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $kota = $_POST['kota'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];
        $ubahkan = mysqli_query($koneksi, "UPDATE member SET n_member='$n_member', jk='$jk', hp='$hp',
 email='$email', kota='$kota', alamat='$alamat', kodepos='$kodepos' WHERE nik='$nik'");
    if($ubahkan){
        echo "<script>
			alert('Data Berhasil Disimpan !');
			location='datamember.php';
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
                                    <label >Nama Member</label>
                                    <input type="text" value="<?php echo $isi['n_member'] ?>" class="form-control" name="n_member" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">

                                    <label >Jenis Kelamin</label>
                                <div class="form-line">
                                    <select name="jk" class="form-control show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Laki-Laki</option>
                                        <option value="2">Prempuan</option>
                                    </select>
                                </div>

                                <div class="help-info"><?php
                                    if (($isi['jk']) ==1){
                                        echo 'lAKI-Laki';
                                    }else
                                    {
                                        echo 'Prempuan';
                                    } ?></div>

                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Kontak Telphone</label>
                                    <input type="text" value="<?php echo $isi['hp'] ?>" class="form-control" name="hp" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Alamat Email</label>
                                    <input type="text" value="<?php echo $isi['email'] ?>" class="form-control" name="email" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Kota</label>
                                    <input type="text" value="<?php echo $isi['kota'] ?>" class="form-control" name="kota" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Kode Pos</label>
                                    <input type="text" value="<?php echo $isi['kodepos'] ?>" class="form-control" name="kodepos" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Alamat</label>
                                    <textarea type="text" class="form-control" name="alamat" maxlength="50" minlength="3"><?php echo $isi['alamat'] ?></textarea>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" name="ubah" type="submit">  <i class="material-icons">save</i><span>Simpan</span></button>
                            <button class="btn btn-success waves-effect" type="reset">  <i class="material-icons">refresh</i><span>Reset</span></button>
                            <a class="btn btn-danger waves-effect" href="datamember.php">  <i class="material-icons">exit_to_app</i><span>Kembali</span></a>

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
