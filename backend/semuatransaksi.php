<?php
include 'header.php';
//include '../aksinya/fungsi.php';
//include '../aksinya/koneksi.php';


?>


<!-- Modal Tambah -->
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

                        </h2>
                        <ul class="header-dropdown m-r--5">

                        </ul>
                    </div>
                    <div class="body">

                        <div class="table-responsive">
                            <form class="form-horizontal form-label-left" action="../laporan/laporantransaksi.php?dari=<?php echo $data['bulan1']; ?>
                            &akhir=<?php echo $data['bulan2'];?>
                            &kd_transaksi=<?php echo $data['kd_transaksi'];?>
                            &nik=<?php echo $data['nik'];?>" method="get">


                                <label class="col-xs-1">Dari</label>
                                <div class="col-md-2">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type="date" name="bulan1" class="form-control"value="">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>

                                    </div>
                                </div>
                                <label class="col-xs-1">Sampai</label>
                                <div class="col-md-2">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type="date" name="bulan2" class="form-control" value="">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>
                                <label class="col-xs-1">Pada Transaksi</label>
                                <div class="col-md-2">
                                    <select name="kd_transaksi" class="form-control show-tick">
                                        <option value="">Transaksi</option>
                                        <?php
                                        $query = " SELECT DISTINCT kd_transaksi FROM invoice";
                                        $hasil = mysqli_query($koneksi,$query);
                                        while ($data = mysqli_fetch_array($hasil))
                                        {
                                            echo "<option value=$data[kd_transaksi]>$data[kd_transaksi]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <label class="col-xs-1">Pada Nik</label>
                                <div class="col-md-2">
                                    <select name="nik" class="form-control show-tick">
                                        <option value="">Nik Member</option>
                                        <?php
                                        $query = " SELECT DISTINCT nik FROM invoice";
                                        $hasil = mysqli_query($koneksi,$query);
                                        while ($data = mysqli_fetch_array($hasil))
                                        {
                                            echo "<option value=$data[nik]>$data[nik]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                &nbsp;
                                &nbsp;<button type="submit" class="btn btn-sl btn-primary"><i class="fa fa-download m-right-ml">Laporan</i> </button>
                            </form>
                            <a target="_blank" class="btn bg-blue waves-effect"href="../laporan/laporantransaksi.php?kd_transaksi=" >
                                <i class="material-icons">print</i>
                                <span>Cetak Semua Transaksi</span></a>
                            <table class="table table-bordered table-striped table-hover dataTable">
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
                                include '../aksinya/koneksi.php';
                                $sqlku = mysqli_query($koneksi, "SELECT * FROM invoice order by status asc");
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
                                    <td><a class="btn btn-danger waves-effect" href="../laporan/laporantransaksi.php?kd_transaksi=<?php echo $rows -> kd_transaksi;?>">
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

