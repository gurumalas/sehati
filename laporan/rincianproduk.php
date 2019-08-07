
<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database

$kd_produk   = $_GET['kd_produk']; //kode berita yang akan dikonvert

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <style>
        .header img {width:300px;height:300px; float:center; text-align:center; }
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

<?php
$query  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM produk WHERE kd_produk='".$kd_produk."'");
$data   = mysqli_fetch_array($query);
?><?php
    echo '<h5 style="font-size: 30px" align="center">'.$data['nama'].'</h5>'   ?></h5>
<div class="header">
    <p><img align="middle"  width="300px" height="300px" src="../images/<?php echo $data['foto_file'];?>" /></p><span>
  <h3 >Rincian Produk <br/>
Toko Sehati</h3>
  </span>
</div>
<table style="width:100%; border-right:1px #eeeeee; border-bottom:1px #eeeeee;  border-left:1px  #eeeeee; ">
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="3">Rincian Produk <?php echo  $data['nama'];?></th>
    </tr>

    <tr style="border-left:1px text-align:left;">
        <td width="10%">Kode Produk</td>
        <td width="">:</td>
        <td width="75%"><?php echo $data['kd_produk'];?></td>
    </tr>
    <tr style="border-left:1px text-align:left;">
        <td width="20%">NAMA Produk</td>
        <td width="">:</td>
        <td width="20%"><?php echo $data['nama'];?> </td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">Harga Produk</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['harga'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">Deskripsi Produk</td>
        <td width="10%">:</td>
        <td ><?php echo  $data['deskripsi']?></td>
    </tr>

</table style="border-bottom:solid 1px #000;">
<br />
</body>
</html>
