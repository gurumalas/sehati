
<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database
$bulan1 = $_GET['bulan1'];
$bulan2 = $_GET['bulan2'];
$status = $_GET['status'];

//
$query  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM invoice LEFT JOIN produk ON invoice.kd_produk = produk.kd_produk
where status=1 and tgl between '$bulan1' and '$bulan2'");
$data   = mysqli_fetch_array($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <style>
        .header img {width:40px;height:50px;  text-align:center; }
        .header h3{font-family:Times, serif;font-size:14px; line-height:30px; text-align:center; margin-top:20px; font-weight:bold; text-transform:uppercase}
        .header p {text-align:center; font-weight:bold; margin:auto;padding:1px!important;}
        .header span {padding-top:10px;}
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
<h5 align="center">Laporan Transaksi</h5>
<div class="header">
    <p><img align="left" src="../images/logoapotek.png" /></p><span>
  <h3 >Toko Sehati<br/>
Jl. A. Yani Km 28 Landasan Ulin, 70724</h3>
Telp. 082148352769</h3>
  </span>
</div>

</table style="border-bottom:solid 1px #000;">
<br />


<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="5">Laporan Keuangan</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No.</th>
        <th width="" align="center" valign="middle">Kode Transaksi</th>
        <th width="" align="center" valign="middle">Tanggal Transaksi</th>
        <th width="" align="center" valign="middle">Rincian Total</th>
        <th width="" align="center" valign="middle">Subtotal</th>
    </tr></thead><tbody>
    <br/>
    <?php
    include "../aksinya/koneksi.php";
    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM invoice LEFT JOIN produk ON invoice.kd_produk = produk.kd_produk
where status=1 and tgl between '$bulan1' and '$bulan2'");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){

        $no++;
       
        ?>
        <tr>
        <td  align="center"><?PHP echo $no;?></td>
        <td  align="center"><?PHP echo $datapost['kd_transaksi']?></td>
        <td  align="center"><?PHP echo $datapost['tgl']?></td>
        <td  align="center"><?PHP echo $datapost['kd_produk']?></td>
        <td  align="center"><?PHP echo $datapost['status']?></td>
        <td  align="center"><?PHP echo $datapost['quantity']?></td>
        <td  align="center"><?PHP echo $datapost['harga']?></td>
        </tr><?PHP }?>
    </tbody>
   <th width="" align="center" valign="middle">Jumlah</th>
</table><br/>


</body>
</html>
