<?php
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

?>
