
<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database

$nik   = $_GET['nik']; //kode berita yang akan dikonvert

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

<?php
$query  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM member WHERE nik='".$nik."'");
$data   = mysqli_fetch_array($query);
?><h5 align="center">BIODATA MEMBER</h5>
<div class="header">
    <p><img align="middle" src="../images/<?php echo $data['fotomember'];?>" /></p><span>
  <h3 >Profil Member <br/>
Toko Sehati</h3>
  </span>
</div>
<table style="width:100%; border-right:1px #eeeeee; border-bottom:1px #eeeeee;  border-left:1px  #eeeeee; ">
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="3">BIODATA</th>
    </tr>

    <tr style="border-left:1px text-align:left;">
        <td width="10%">NIP</td>
        <td width="">:</td>
        <td width="75%"><?php echo $data['nik'];?></td>
    </tr>
    <tr style="border-left:1px text-align:left;">
        <td width="20%">NAMA</td>
        <td width="">:</td>
        <td width="20%"><?php echo $data['n_member'];?> </td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">Kontak Telphone</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['hp'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">JENIS KELAMIN</td>
        <td width="10%">:</td>
        <td ><?php
            if (($data['jk']) == 1){
                echo 'Laki-Laki';
            } else{
                echo 'Wanita';
            }?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">Alamat</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['alamat'];?></td>
    </tr>

</table style="border-bottom:solid 1px #000;">
<br />
</body>
</html>
