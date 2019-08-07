<?php
date_default_timezone_set('Asia/Jakarta');

$host ="localhost";
$user ="root";
$password ="";
$database ="sehati";

$koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $password));
((bool)mysqli_query($koneksi, "USE " . $database));
$tgl=date("Y/m/d");
function query($qry) {
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $qry) or die("Gagal melakukan query pada :
	 <br>$qry<br><br>Kode Salah : <br>&nbsp;&nbsp;&nbsp;" . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . "!");
    return $result;
}
function fetch_row($qry) {
    $tmp = query($qry);
    list($result) = mysqli_fetch_row($tmp);
    return $result;
}

function format_rupiah($rp) {
    $hasil = "<b>IDR." . number_format($rp, 0, "", ".") . ",00-</b>";
    return $hasil;
}


function list_kategori() {


    $kat = query("SELECT kd_jenis, n_jenis FROM jenis ");

    while ($row = mysqli_fetch_row($kat)) {

        echo "<li><a href='kategori.php?cari=kategori&kd_jenis=".$row[0]."'>" . ucwords($row[1]) . "</a> </li>";

    }
}

function autonumber($tabel, $kolom, $lebar=0, $awalan=''){

    $host ="localhost";
    $user ="root";
    $password ="";
    $database ="sehati";

    $koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $password));
    ((bool)mysqli_query($koneksi, "USE " . $database));
    $tgl=date("Y/m/d");

    //proses auto number

    $auto = mysqli_query($koneksi,"select $kolom from $tabel order by $kolom desc limit 1") or die(mysqli_error());
    $jumlah_record = mysqli_num_rows($auto);
    if($jumlah_record == 0)
        $nomor = 1;

    else{
        $row = mysqli_fetch_array($auto);
        $nomor = intval(substr($row[0], strlen($awalan)))+1;
    }
    if($lebar>0)
        $angka = $awalan.str_pad ($nomor, $lebar, "0", STR_PAD_LEFT);
    else
        $angka=$awalan.$nomor;
    return $angka;
}
function konversi_bulan($bln) {
    switch($bln) {
        case "1" :

        case "01" :
            $bulan = "Januari";
            break;
        case "2" :

        case "02" :
            $bulan = "Februari";
            break;
        case "3" :

        case "03" :
            $bulan = "Maret";
            break;
        case "4" :

        case "04" :
            $bulan = "April";
            break;
        case "5" :

        case "05" :
            $bulan = "Mei";
            break;
        case "6" :

        case "06" :
            $bulan = "Juni";
            break;
        case "7" :

        case "07" :
            $bulan = "Juli";
            break;
        case "8" :

        case "08" :
            $bulan = "Agustus";
            break;
        case "9" :

        case "09" :
            $bulan = "September";
            break;
        case "10" :
            $bulan = "Oktober";
            break;
        case "11" :
            $bulan = "November";
            break;
        case "12" :
            $bulan = "Desember";
            break;
        default :
            $bulan = "Nooooooot..!!";
    }
    return $bulan;
}
function konversi_tanggal($time) {
    list($thn, $bln, $tanggal) = explode('-', $time);
    $tmp = $tanggal . " " . konversi_bulan($bln) . " " . $thn;
    return $tmp;
}

//if (isset($_GET['aksi']) == 'cari2') {
//    $cari2 = $_GET['cari2'];
//    $cari3 = $_GET['cari3'];
//    $carikan = mysqli_query($koneksi, "select * from produk WHERE
//    kd_produk='%$cari2%' or
//    ");
//    if(($carikan)==''){
//        echo "<script>
//			alert('Data TIDAK ADA !');
//			location='../backend/produk.php';
//		  </script>";
//    } else{
//        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data  Gagal Disimpan!</div>';
//    }
//}
?>
