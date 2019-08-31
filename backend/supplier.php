<?php
include 'header.php';

$cek = mysqli_query($koneksi, "Select * from supplier");
if(isset($_GET['delete'])){
    $id_supplier= $_GET['id_supplier'];
    $delete = mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier='$id_supplier'");
}

if (isset($_POST["tambah"])) {
    $id_supplier= $_POST['id_supplier'];

    $nama_supplier = $_POST['nama_supplier'];

    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $mysqli = "INSERT INTO supplier(nama_supplier,alamat,kontak) VALUES ('$nama_supplier','$alamat','$kontak')";
    $result = mysqli_query($koneksi, $mysqli) or die("gagal " . mysqli_error($koneksi));

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
                            <label >Nama Supplier</label>
                            <input type="text" class="form-control" name="nama_supplier" maxlength="50" minlength="3" placeholder="HL00021" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Alamat</label>
                            <input type="text" class="form-control" name="alamat" maxlength="50" minlength="3"  placeholder="Herbalife Milk" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label >Kontak</label>
                            <input type="text" class="form-control" name="kontak" maxlength="50" minlength="1"  placeholder="Herbalife Milk" required>
                            <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
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


        <!-- Exportable Table -->
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABEL DATA SUPPLIER
                        </h2>
                        <ul class="header-dropdown m-r--5">

                            <button data-toggle="modal" data-target="#exampleModal" class="btn bg-BLUE waves-effect" >
                                <i class="material-icons">local_mall</i>
                                <span>DATA SUPPLIER</span>
                            </button>

                        </ul>
                    </div>

                    <div class="body">
                        <!--                        <form action="stok.php" method="get">-->
                        <!---->
                        <!--                            <select name="cari2" >-->
                        <!--                                <option value="">Pilih Menurut Kategori</option>-->
                        <!--                                <option value="kd_produk">Kode Produk</option>-->
                        <!--                                <option value="namaproduk">Nama Produk</option>-->
                        <!--                                <option value="jproduk">Jenis Produk</option>-->
                        <!--                                <option value="hproduk">Harga Produk</option>-->
                        <!--                                <option value="desproduk">Deskripsi Produk</option>-->
                        <!--                            </select>-->
                        <!--                            <input type="text" name="cari3"/>-->
                        <!--                            <button name="cari2" class="btn btn-success">CARI</button>-->
                        <!--                        </form>-->
                        <div class="table-responsive">
                            <a target="_blank" class="btn bg-black waves-effect"href="../laporan/laporanproduk.php" >
                                <i class="material-icons">print</i>
                                <span>Cetak Semua Data</span></a>
                            <table class="table table-bordered table-striped table-hover dataTable ">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Supplier</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
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

                                $sql = mysqli_query($koneksi, "select * from supplier");
                                $no=1;
                                //proses menampilkan data
                                while($rows=mysqli_fetch_object($sql)){

                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><img src='../images/<?php echo $rows -> foto_file?>'  width='150px' height='150px'> <br/>
                                        <p style="text-align: center;"><strong><?php echo $rows -> kd_produk?></strong></p>
                                    </td>
                                    <td><?php echo $rows -> nama?></td>
                                    <td><?php echo format_rupiah($rows ->beli)?></td>
                                    <td><?php echo format_rupiah($rows ->jual)?></td>
                                    <td><?php echo $rows -> banyak?></td>
                                    <td>

                                        <a class="btn bg-green waves-effect"href="estok.php?aksi=ubah&kd_produk=<?= $rows -> kd_produk; ?>" >
                                            <i class="material-icons">edit</i>
                                            <span>Edit</span></a>
                                        <a class="btn bg-red waves-effect" href="stok.php?delete&kd_produk=<?= $rows -> kd_produk; ?>"
                                           onclick="return confirm('Anda Yakin Akan Menghapus')" title="Hapus Data" >
                                            <i class="material-icons">delete</i>
                                            <span>Hapus</span></a>
                                        <a target="_blank" class="btn bg-black waves-effect"href="../laporan/rincianproduk.php?kd_produk=<?= $rows -> kd_produk; ?>" >
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

