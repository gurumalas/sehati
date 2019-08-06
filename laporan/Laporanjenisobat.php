
<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database

$kd_jenis   = $_GET['kd_jenis']; //kode berita yang akan dikonvert

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <style>
        .header img {width:40px;height:50px; float:center; text-align:center; }
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
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="4">Laporan Transaksi</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No</th>
        <th width="" align="center" valign="middle">Kode Jenis</th>
        <th width="" align="center" valign="middle">Nama Jenis</th>
        <th width="" align="center" valign="middle">Deskripsi</th>
    <br/>
    <?php
    include "../aksinya/koneksi.php";
    $sql=mysqli_query($koneksi, "SELECT * FROM jenis WHERE kd_jenis='".$kd_jenis."'");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){

        $no++;
       
        ?>
        <tr>
        <td  align="center"><?PHP echo $no;?></td>
        <td  align="center"><?PHP echo $datapost['kd_jenis']?></td>
        <td  align="center"><?PHP echo $datapost['n_jenis']?></td>
        <td  align="center"><?PHP echo $datapost['deskripsi']?></td>
        </tr><?PHP }?>
    </tbody></table><br/>


</body>
</html>
