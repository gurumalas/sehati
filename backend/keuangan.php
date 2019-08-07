<?php
include 'header.php';
//include '../aksinya/fungsi.php';
//include '../aksinya/koneksi.php';


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
                    <div class="header">
                        <h2>
                            EXPORTABLE TABLE
                        </h2>

                        <ul class="header-dropdown m-r--5">

                            <button data-toggle="modal" data-target="#exampleModal" class="btn bg-BLUE waves-effect" >
                                <i class="material-icons">local_mall</i>
                                <span>TAMBAH PRODUK</span>
                            </button>

                        </ul>
                    </div>


                        <form class="form-horizontal form-label-left" action="../laporan/laporankeuangan.php?dari=<?php echo $data['bulan1']; ?>&akhir=<?php echo $data['bulan2']; ?>" method="get">


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
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                              <button type="submit" class="btn btn-sl btn-primary"><i class="fa fa-download m-right-ml"> EXSPORT PDF</i> </button>
                    </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable ">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Rincian Total</th>
                                    <th>SubTotal</th>
                                </tr>
                                </thead> <?php
                                include '../aksinya/koneksi.php';
                                $sqlku = mysqli_query($koneksi, "SELECT * FROM invoice order by status asc");
                                $no=1;
                                $semua =0;
                                //proses menampilkan data
                                while($rows=mysqli_fetch_object($sqlku)){
                                $subtotal= $rows ->totalbyar;
                                $semua=$semua+$subtotal;
                                ?>
                                <tbody>
                                <tr>

                                    <td><?php echo $no?></td>
                                    <td><?php echo $rows -> kd_transaksi?></td>
                                    <td><?php echo konversi_tanggal($rows -> tgl);?></td>
                                    <td><?php echo $rows ->quantity.'x'.format_rupiah($rows ->harga)?></td>
                                    <td><?php echo format_rupiah($rows ->totalbyar)?></td>


                                </tr>
                                <?php $no++;
                                }
                                ?>

                                </tbody>
                                <th colspan="5"><p style="text-align: right">Jumlah
                                    <?php

                                    echo format_rupiah($semua);
                                    ?></p></th>
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

