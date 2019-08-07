<?php
include 'header.php';

$cek = mysqli_query($koneksi, "Select * from produk");
if(isset($_GET['delete'])){
    $kd_produk= $_GET['kd_produk'];
    $delete = mysqli_query($koneksi, "DELETE FROM produk WHERE kd_produk='$kd_produk'");
}

if (isset($_POST["tambah"])) {
    $kd_produk = $_POST['kd_produk'];

    $kd_jenis = $_POST['kd_jenis'];

    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $foto_file = $_POST['foto_file'];
    $nama = "1463";
    $dir_upload = "../images/";
    $nama_file = $_FILES['foto_file']['name'];
//    $nama_file = $kd_produk.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);
    $x                 = explode('.', $nama_file);
    $extension         = strtolower(end($x));
    $namabaru             = $nama_file . '.' . $extension;
    //
    if (is_uploaded_file($_FILES['foto_file']['tmp_name'])) {
//        'Whatevernameyouwant.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $masuk = move_uploaded_file($_FILES['foto_file']['tmp_name'],
            $dir_upload . $nama_file);

        $mysqli = "INSERT INTO produk(kd_produk,foto_file,kd_jenis,harga,deskripsi) VALUES ('$kd_produk','$nama_file','$kd_jenis','$harga','$deskripsi')";
        $result = mysqli_query($koneksi, $mysqli) or die("gagal " . mysqli_error($koneksi));
        $cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE kd_produk='$kd_produk'");
        if ($cek) {
        } else {
            die ("File gagal diupload");
        }
    }
}

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
                            <select name="kd_jenis" class="form-control"  style="width: 100%;" required>
                                <option value="">Pilih Jenis</option>
                                <?php
                                include "../aksinya/koneksi.php";
                                $query = "SELECT * from jenis";
                                $hasil = mysqli_query($koneksi,$query);
                                while ($data = mysqli_fetch_array($hasil))
                                {

                                    echo "<option value=$data[n_jenis]>$data[kd_jenis]&nbsp;-&nbsp;$data[n_jenis]</option>";
                                }
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
                    <div class="header">
                        <h2>
                            EXPORTABLE TABLE
                        </h2>
                        <ul class="header-dropdown m-r--5">

                            <button data-toggle="modal" data-target="#exampleModal" class="btn bg-BLUE waves-effect" >
                                <i class="material-icons">local_mall</i>
                                <span>TAMBAH PRODUK</span>
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
                        <form action="produk.php" method="get">

                            <select name="cari2" >
                                <option value="">Pilih Menurut Kategori</option>
                                <option value="kd_produk">Kode Produk</option>
                                <option value="namaproduk">Nama Produk</option>
                                <option value="jproduk">Jenis Produk</option>
                                <option value="hproduk">Harga Produk</option>
                                <option value="desproduk">Deskripsi Produk</option>
                            </select>
                            <input type="text" name="cari3"/>
                            <button name="cari2" class="btn btn-success">CARI</button>
                        </form>
                        <div class="table-responsive">
                            <a target="_blank" class="btn bg-black waves-effect"href="../laporan/laporanproduk.php" >
                                <i class="material-icons">print</i>
                                <span>Cetak Semua Data</span></a>
                            <table class="table table-bordered table-striped table-hover dataTable ">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Produk</th>
                                    <th>Tampilan Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Jenis</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead> <?php
//                                $cari2 = $_GET['cari2'];
//                                $cari3 = $_GET['cari3'];
//                                if(isset($_GET['cari'])){

//                                $data = mysqli_query($koneksi,"select * from invoice where nama like '%".$cari2."%'");
//                                $sql = mysqli_query($koneksi,"select * from invoice where  like '%.9.%'");
//                                    while($rows=mysqli_fetch_object($sql));
//                                } else

                                $sql = mysqli_query($koneksi, "select * from produk");
                                $no=1;
                                //proses menampilkan data
                                while($rows=mysqli_fetch_object($sql)){

                                $foo =str_repeat($rows -> deskripsi,1);
                                $deskripsi = wordwrap($foo, 19, '<br/>', true);
                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $rows -> kd_produk?></td>
                                    <td><img src='../images/<?php echo $rows -> foto_file?>'  width='150px' height='150px'> <br/>
                                        <p style="text-align: center;"><strong><?php echo $rows -> kd_produk?></strong></p>
                                    </td>
                                    <td><?php echo $rows -> nama?></td>
                                    <td><?php echo $rows -> kd_jenis?></td>
                                    <td><?php echo format_rupiah($rows ->harga)?></td>
                                    <td><?php echo $rows -> deskripsi?></td>
                                    <td>

                                        <a class="btn bg-green waves-effect"href="eproduk.php?aksi=ubah&kd_produk=<?= $rows -> kd_produk; ?>" >
                                            <i class="material-icons">edit</i>
                                            <span>Edit</span></a>
                                        <a class="btn bg-red waves-effect" href="produk.php?delete&kd_produk=<?= $rows -> kd_produk; ?>"
                                           onclick="return confirm('Anda Yakin Akan Menghapus')" title="Hapus Data" >
                                            <i class="material-icons">delete</i>
                                            <span>Hapus</span></a>
                                        <a class="btn bg-black waves-effect"href="pproduk.php?kd_produk=<?= $rows -> kd_produk; ?>" >
                                            <i class="material-icons">print</i>
                                            <span>Cetak</span></a>


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

