<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database
include  "../aksinya/fungsi.php";

$kd_transaksi   = $_GET['kd_transaksi']; //kode berita yang akan dikonvert
$sql=mysqli_query($koneksi, "SELECT * FROM invoice WHERE kd_transaksi='".$kd_transaksi."'");
$data=mysqli_fetch_array($sql);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <style>
        .header img {width:100%;height:50%; float:; text-align:center; }
        .header h3{font-family:Times, serif;font-size:14px; line-height:30px; text-align:center; margin-top:0px; font-weight:bold; text-transform:uppercase}
        .header p {text-align:center; font-weight:bold; margin:auto;padding:1px!important;}
        .header span {padding-top:0px;}
        .table {border: solid 1px #eeeeee; width:100%;margin:auto;}
        .table th {border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;
            text-transform:uppercase}
        .table td {border-right: 1px #eeeeee;border-bottom:solid 1px #eeeeee; padding:8px;word-wrap:break-word;
            font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#000;}
        p {margin:0px;padding:4px!important; font-size:15px;font-family:Arial, Helvetica, sans-serif;text-transform:capitalize}
        .ttd {margin-top:50px; line-height:25px;}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<div class="header">
    <img align="left" src="../images/logoapotek.png" />
  <h3 style="text-align: center">
Jl. A. Yani Km 28 Landasan Ulin, 70724 <br/>Telp. 082148352769</h3>
</div>

</table style="border-bottom:solid 1px #000;">
<br />


<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="8">Laporan Data Transaksi <?php echo $data['kd_transaksi']?></th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No</th>
        <th width="" align="center" valign="middle">Kode Transaksi</th>
        <th width="" align="center" valign="middle">Tanggal</th>
        <th width="" align="center" valign="middle">Kode Produk</th>
        <th width="" align="center" valign="middle">Status</th>
        <th width="" align="center" valign="middle">Modal</th>
        <th width="" align="center" valign="middle">Quantity</th>
        <th width="" align="center" valign="middle">Harga</th>
    </tr></thead><tbody>
    <br/>
    <?php
    include "../aksinya/koneksi.php";
    if (($kd_transaksi)=='') {
        // Akan tampil transaksi yang sudah bayar
        $sql=mysqli_query($koneksi, "SELECT * FROM invoice left join stok on 
        invoice.kd_produk=stok.kd_produk    where status='1'");
    } elseif (($kd_transaksi)==$kd_transaksi){
        $sql=mysqli_query($koneksi, "SELECT * FROM invoice left join stok on 
        invoice.kd_produk=stok.kd_produk WHERE kd_transaksi='".$kd_transaksi."'");
    } elseif (((($kd_transaksi)==$kd_transaksi) && (($bulan1)==$bulan1)) && (($bulan2)==$bulan2)) {
        $bulan1 = $_GET['bulan1'];
        $bulan2 = $_GET['bulan2'];
        $status = $_GET['status'];
        $sql=mysqli_query($koneksi, "SELECT * FROM invoice left join stok on 
        invoice.kd_produk=stok.kd_produk WHERE kd_transaksi='".$kd_transaksi."' 
        and bulan1='$bulan1' and bulan2='$bulan2' or status='1' and nik='$nik'");
    }

    $no=0;
    $semua=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){
        $subtotal= $datapost['totalbyar'];
        $semua=$semua+$subtotal;
        $modal = $datapost['beli']*$datapost['quantity'];
        $no++;
       
        ?>
        <tr>
        <td  align="center"><?PHP echo $no;?></td>
        <td  align="center"><?PHP echo $datapost['kd_transaksi']?></td>
        <td  align="center"><?PHP echo $datapost['tgl']?></td>
        <td  align="center"><?PHP echo $datapost['kd_produk']?></td>
        <td  align="center"><?PHP if(($datapost['status'])=='0'){
                echo "Belum Lunas";
            } else {
                echo "Lunas";
            }
            ?></td>
        <td  align="center"><?PHP echo format_rupiah($datapost['beli'])?></td>

        <td  align="center"><?PHP echo $datapost['quantity']?></td>
        <td  align="center"><?PHP echo format_rupiah($datapost['harga'])?></td>
        </tr><?PHP }?>
    </tbody>
    <th colspan="0" align="right" ><p style="text-align: right">Jumlah : <?php

            echo format_rupiah($modal);
            ?></p></th>
    <th colspan="8" align="left" ><p style="text-align: right">Jumlah : <?php
        echo format_rupiah($semua);
            ?></p></th>
</table><br/>

<br/>
<table style=" position: relative;
 left: 80%;">
    <th align="left">Landasan Ulin</th>
    <th><?php
        echo date('d/m/Y');
//        echo date('l, d-m-Y');
        ?></th><tbody>

    <td>Pemilik Toko</td>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <tr>    </tr>
    <td><?php
        $bos=mysqli_query($koneksi, "SELECT * FROM owner WHERE no=1");
        while($databos=mysqli_fetch_object($bos))
        {
            echo $databos->nama;
        }?></td>
    </tbody>
</table>
</body>
</html>
