
<?php
include_once("../aksinya/koneksi.php"); //buat koneksi ke database

$nip   = $_GET['nip']; //kode berita yang akan dikonvert

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
$query  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM identitas WHERE nip='".$nip."'");
$data   = mysqli_fetch_array($query);
if ($data["darah"]==1) {$data["darah"]='A';}
elseif ($data["darah"]==2) {$data["darah"]='B';}
elseif ($data["darah"]==3) {$data["darah"]='AB';}
elseif ($data["darah"]==4) {$data["darah"]='0';}

if ($data["agama_id"]==1) {$data["agama_id"]="ISLAM";}
elseif ($data["agama_id"]==2) {$data["agama_id"]="PROTESTAN";}
elseif ($data["agama_id"]==3) {$data["agama_id"]="KATHOLIK";}
elseif ($data["agama_id"]==4) {$data["agama_id"]="HINDU";}
elseif ($data["agama_id"]==5) {$data["agama_id"]="BUDHA";}
elseif ($data["agama_id"]==6) {$data["agama_id"]="KONGHUCHU";}
elseif ($data["agama_id"]==7) {$data["agama_id"]="KEPERCAYAAN";}
else {$data["agama_id"]="NA";}

if ($data["sex"]==1) {$data["sex"]="LAKI-LAKI";}
elseif ($data["sex"]==2) {$data["sex"]="PEREMPUAN";}
else {$data["sex"]="NA";}

if ($data["kawin"]==1) {$data["kawin"]="BELUM KAWIN";}
elseif ($data["kawin"]==2) {$data["kawin"]="SUDAH KAWIN";}
elseif ($data["kawin"]==3) {$data["kawin"]="duda";}
elseif ($data["kawin"]==4) {$data["kawin"]="janda";}
else {$data["kawin"]="NA";}


if ($data["status_id"]==1) {$data["status_id"]='CPNS';}
elseif ($data["status_id"]==2) {$data["status_id"]='PNS';}
elseif ($data["status_id"]==3) {$data["status_id"]='PENSIUN BUP';}
elseif ($data["status_id"]==4) {$data["status_id"]='TNI/POLRI';}
elseif ($data["status_id"]==5) {$data["status_id"]='TKS / HONORER';}
elseif ($data["status_id"]==6) {$data["status_id"]='PEGAWAI TIDAK TETAP';}
elseif ($data["status_id"]==7) {$data["status_id"]='LAIN-LAIN';}
elseif ($data["status_id"]==8) {$data["status_id"]='PINDAH KE INSTANSI DAERAH LAIN';}
elseif ($data["status_id"]==9) {$data["status_id"]='PENSIUN APS';}
elseif ($data["status_id"]==10) {$data["status_id"]='MENINGGAL DUNIA';}
elseif ($data["status_id"]==11) {$data["status_id"]='DIBERHENTIKAN';}
elseif ($data["status_id"]==12) {$data["status_id"]='BERHENTI';}
elseif ($data["status_id"]==13) {$data["status_id"]='TUGAS BELAJAR';}
else {$data["status_id"]='NA';}
if ($data["kedudukan_id"]==1) {$data["kedudukan_id"]='AKTIF';}
elseif ($data["kedudukan_id"]==2) {$data["kedudukan_id"]='TIDAK AKTIF';}
elseif ($data["kedudukan_id"]==3) {$data["kedudukan_id"]='CUTI DILUAR TANGGUNGAN NEGARA';}
else {$data["kedudukan_id"]='NA';}

$foo =str_repeat($data['alamat'],1);
$data['alamat'] = wordwrap($foo, 70, '<br/>', true);
?><h5 align="center">BIODATA PEGAWAI KALSEL</h5>
<div class="header">
    <p><img align="middle" src="kalsel.png" /></p><span>
  <h3 >Profil pegawai <br/>
pemerintah provinsi kalimantan selatan</h3>
  </span>
</div>
<table style="width:100%; border-right:1px #eeeeee; border-bottom:1px #eeeeee;  border-left:1px  #eeeeee; ">
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="3">BIODATA</th>
    </tr>

    <tr style="border-left:1px text-align:left;">
        <td width="10%">NIP</td>
        <td width="">:</td>
        <td width="75%"><?php echo $data['nip'];?></td>
    </tr>
    <tr style="border-left:1px text-align:left;">
        <td width="20%">NAMA</td>
        <td width="">:</td>
        <td width="20%"><?php echo $data['gelar1'];?> <?php echo $data['nama'];?> <?php echo $data['gelar2'];?> </td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">TEMPAT LAHIR</td>
        <td width="10%">:</td>
        <td ><?php echo $data['tmlahir'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">TANGGAL LAHIR</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['tglahir'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">JENIS KELAMIN</td>
        <td width="10%">:</td>
        <td ><?php echo $data['sex'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">agama_id</td>
        <td width="10%">:</td>

        <td width="90%"><?php echo $data['agama_id'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">GOLONGAN DARAH</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['darah'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">STATUS KAWIN</td>
        <td width="10%">:</td>
        <td ><?php echo $data['kawin']?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">ALAMAT</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['alamat'];?></td>

    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">TELEPON</td>
        <td width="10%">:</td>
        <td ><?php echo $data['telpon'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">EMAIL</td>
        <td width="10%">:</td>
        <td ><?php echo $data['email'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">STATUS PEGAWAI</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['status_id'];?></td>
    </tr>
    <tr style="border-;eft:1px text-align:left;">
        <td width="20%">KEDUDUKAN PEGAWAI</td>
        <td width="10%">:</td>
        <td width="90%"><?php echo $data['kedudukan_id'];?></td>
    </tr>

</table style="border-bottom:solid 1px #000;">
<br />


<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="6">Data CPns</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No.</th>
        <th width="" align="center" valign="middle">sk cpns</th>
        <th width="" align="center" valign="middle">tgl cpns</th>
        <th width="" align="center" valign="middle">tmt cpns</th>
        <th width="" align="center" valign="middle">golongan</th>
    </tr></thead><tbody>
    <?php
    include "koneksi.php";
    // SELECT * FROM daftar_dosen WHERE nama_dosen='Rubin Hadi'
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "select * from db_tw1 order by boks='BOKS 02' desc");
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM db_tw1 WHERE boks='BOKS 02'");
    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM cpns WHERE nip='".$nip."'");
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM db_tw1 WHERE triwulan like 'Triwulan IV' AND tahun like '2017'");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){
        $no++;
        $skcpns = strip_tags($datapost['skcpns']);
        $tglskcpns = strip_tags($datapost['tglskcpns']);
        $tmtcpns = strip_tags($datapost['tmtcpns']);
        $golcpns = strip_tags($datapost['golcpns']);
        if ($golcpns==11) {$golcpns='I.A';}
        elseif ($golcpns==12) {$golcpns='I.B';}
        elseif ($golcpns==21) {$golcpns='II.A';}
        elseif ($golcpns==22) {$golcpns='II.B';}
        elseif ($golcpns==31) {$golcpns='III.A';}
        elseif ($golcpns==32) {$golcpns='III.B';}
        elseif ($golcpns==40) {$golcpns='IV/D';}
        elseif ($golcpns==41) {$golcpns='IV.A';}
        elseif ($status_id==42) {$status_id='IV.B';}
        elseif ($status_id==43) {$status_id='IV/C';}
        elseif ($status_id==44) {$status_id='III/C';}
        elseif ($status_id==51) {$status_id='V.A';}
        elseif ($status_id==52) {$status_id='V.B';}
        elseif ($status_id==99) {$status_id='NON ESELON';}

        ?>

        <tr>
        <td><?PHP echo  $no;?></td>
        <td><?PHP echo $skcpns;?></td>
        <td><?PHP echo $tglskcpns;?></td>
        <td><?PHP echo $tmtcpns;?></td>
        <td><?PHP echo $golcpns;?></td>
        </tr><?PHP }?>
    </tbody></table>
<br/>
<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="6">Data Pns</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No.</th>
        <th width="" align="center" valign="middle">sk cpns</th>
        <th width="" align="center" valign="middle">tgl cpns</th>
        <th width="" align="center" valign="middle">tmt cpns</th>
        <th width="" align="center" valign="middle">golongan</th>
    </tr></thead><tbody>
    <?php
    include "koneksi.php";
    // SELECT * FROM daftar_dosen WHERE nama_dosen='Rubin Hadi'
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "select * from db_tw1 order by boks='BOKS 02' desc");
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM db_tw1 WHERE boks='BOKS 02'");
    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM cpns WHERE nip='".$nip."'");
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM db_tw1 WHERE triwulan like 'Triwulan IV' AND tahun like '2017'");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){
        $no++;
        $skcpns = strip_tags($datapost['skcpns']);
        $tglskcpns = strip_tags($datapost['tglskcpns']);
        $tmtcpns = strip_tags($datapost['tmtcpns']);
        $golcpns = strip_tags($datapost['golcpns']);
        if ($golcpns==11) {$golcpns='I.A';}
        elseif ($golcpns==12) {$golcpns='I.B';}
        elseif ($golcpns==21) {$golcpns='II.A';}
        elseif ($golcpns==22) {$golcpns='II.B';}
        elseif ($golcpns==31) {$golcpns='III.A';}
        elseif ($golcpns==32) {$golcpns='III.B';}
        elseif ($golcpns==40) {$golcpns='IV/D';}
        elseif ($golcpns==41) {$golcpns='IV.A';}
        elseif ($status_id==42) {$status_id='IV.B';}
        elseif ($status_id==43) {$status_id='IV/C';}
        elseif ($status_id==44) {$status_id='III/C';}
        elseif ($status_id==51) {$status_id='V.A';}
        elseif ($status_id==52) {$status_id='V.B';}
        elseif ($status_id==99) {$status_id='NON ESELON';}
        else {$agama_id='TUGAS BELAJAR';}
        ?>

        <tr>
        <td><?PHP echo  $no;?></td>
        <td><?PHP echo $skcpns;?></td>
        <td><?PHP echo $tglskcpns;?></td>
        <td><?PHP echo $tmtcpns;?></td>
        <td><?PHP echo $golcpns;?></td>
        </tr><?PHP }?>
    </tbody></table>
<br/>
<br/>
<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="6">Data RIWAYAT JABATAN</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No.</th>
        <th width="" align="center" valign="middle">JABATAN</th>
        <th width="" align="center" valign="middle">TMT</th>
        <th width="" align="center" valign="middle">SATUAN KERJA</th>
        <th width="" align="center" valign="middle">UNIT KERJA</th>
        <th width="" align="center" valign="middle">INTANSI</th>
    </tr></thead><tbody>
    <br/>
    <?php
    include "koneksi.php";
    // SELECT * FROM daftar_dosen WHERE nama_dosen='Rubin Hadi'
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "select * from db_tw1 order by boks='BOKS 02' desc");
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM db_tw1 WHERE boks='BOKS 02'");
    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM dbjabatan WHERE nip='".$nip."'");
    // $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM db_tw1 WHERE triwulan like 'Triwulan IV' AND tahun like '2017'");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){
        $no++;
        $jabatan = strip_tags($datapost['njabatan']);
        $tmt = strip_tags($datapost['tmt']);
        $satker = strip_tags($datapost['satker']);
        $unker = strip_tags($datapost['unker']);
        $instansi = strip_tags($datapost['instansi']);
        $foo =str_repeat($jabatan,1);
        $jabatan = wordwrap($foo, 19, '<br/>', true);
        $foo =str_repeat($tmt,1);
        $tmt = wordwrap($foo, 5, '<br/>', true);
        $foo =str_repeat($satker,1);
        $satker = wordwrap($foo, 13, '<br/>', true);
        $foo =str_repeat($unker,1);
        $unker = wordwrap($foo, 11, '<br/>', true);
        $foo =str_repeat($instansi,1);
        $instansi = wordwrap($foo, 11, '<br/>', true);

        ?>
        <tr>
        <td><?PHP echo  $no;?></td>
        <td><?PHP echo $jabatan;?></td>
        <td><?PHP echo $tmt;?></td>
        <td><?PHP echo $satker;?></td>
        <td><?PHP echo $unker;?></td>
        <td><?PHP echo $instansi;?></td>

        </tr><?PHP }?>
    </tbody></table><br/>
<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="6">Riwayat pendidikan</th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No</th>
        <th width="" align="center" valign="middle">Pendidikan</th>
        <th width="" align="center" valign="middle">ktpu</th>
        <th width="" align="center" valign="middle">lulus</th>
        <th width="" align="center" valign="middle">tempat</th>
        <th width="" align="center" valign="middle">lokasi</th>
    </tr></thead><tbody>
    <br/>
    <?php
    include "koneksi.php";
    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM pendidikan WHERE nip='".$nip."'");
    $no=0;
    $tgl=date("d-m-Y");
    while($datapost=mysqli_fetch_array($sql)){

        $no++;
        $ktpu = strip_tags($datapost['ktpu']);
        if ($ktpu==1) {$ktpu='SD';}
        elseif ($ktpu==2) {$ktpu='SMP';}
        elseif ($ktpu==3) {$ktpu='SMA';}    //elseif ($angka==80) {$hruf='B';}
        elseif ($ktpu==4) {$ktpu='D-I';}
        elseif ($ktpu==5) {$ktpu='D-II';}
        elseif ($ktpu==6) {$ktpu='D-III';}
        elseif ($ktpu==7) {$ktpu='D-IV';}
        elseif ($ktpu==8) {$ktpu='S-1';}
        elseif ($ktpu==9) {$ktpu='S-2';}
        elseif ($ktpu==10) {$ktpu='S-3';}
        else {$ktpu='-';}
        $jurusan = strip_tags($datapost['jurusan']);
        $foo =str_repeat($jurusan,1);
        $jurusan = wordwrap($foo, 15, '<br/>', true);
        $tanggal = strip_tags($datapost['tanggal']);
        $tahun = strip_tags($datapost['tahun']);
        $sekolah = strip_tags($datapost['sekolah']);
        $tempat = strip_tags($datapost['tempat']);
        ?>
        <tr>
        <td  align="center"><?PHP echo  $no;?></td>
        <td  align="center"><?PHP echo $jurusan;?></td>
        <td  align="center"><?PHP echo $ktpu ;?></td>
        <td  align="center"><?PHP echo $tanggal;?></td>
        <td  align="center"><?PHP echo $sekolah;?></td>
        <td  align="center"><?PHP echo $tempat;?></td>
        </tr><?PHP }?>
    </tbody></table><br/>


</body>
</html>
