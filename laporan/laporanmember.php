
<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database

 //kode berita yang akan dikonvert

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
<body onload="window.print()">
<h5 align="center">Laporan Data Member</h5>
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
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="9">Laporan Data Member</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No.1</th>
        <th width="" align="center" valign="middle">Nama Member2</th>
        <th width="" align="center" valign="middle">Foto Member3</th>
        <th width="" align="center" valign="middle">No.Hp4</th>
        <th width="" align="center" valign="middle">NIK</th>
        <th width="" align="center" valign="middle">NIK6</th>
        <th width="" align="center" valign="middle">Email7</th>
        <th width="" align="center" valign="middle">Alamat8</th>
        <th width="" align="center" valign="middle">Kode Pos9</th>
    <br/>
    <br/>
    <?php
    include "../aksinya/koneksi.php";
    $sql=mysqli_query($koneksi, "SELECT * FROM member");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){

        $no++;
       
        ?>
        <tr>
        <td  align="center"><?PHP echo $no;?></td>
        <td  align="center"><?PHP echo $datapost['n_member']?></td>
        <td  align="center"><img width="150px" height="150px"  src="../images/<?PHP echo $datapost['fotomember']?>" We></td>
        <td  align="center"><?PHP echo $datapost['hp']?></td>
        <td  align="center"><?PHP echo $datapost['nik']?></td>
        <td  align="center"><?PHP
        if  (($datapost['jk']) ==1) {
            echo "LAKI-LAKI";
        }else { echo "Perempuan";
        }?></td>
        <td  align="center"><?PHP echo $datapost['email']?></td>
        <td  align="center"><?PHP echo $datapost['nik']?></td>
        <td  align="center"><?PHP echo $datapost['kodepos']?></td>
        <td  align="center"><?PHP echo $datapost['alamat']?></td>
        </tr><?PHP }?>
    </tbody></table><br/>


</body>
</html>
