<?php
if (isset($_GET['act']) && isset($_GET['ref'])) {
    $act = $_GET['act'];
    $ref = $_GET['ref'];

        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $key => $value) {
                $kd_produk = $_POST['kd_produk' . $key];
                $kuantitas = $value;
                $query_barang = mysqli_query($koneksi, "SELECT * FROM produk WHERE `kd_produk` = '$key'");

                $rs_barang = mysqli_fetch_array($query_barang);
                $harga = $rs_barang['harga'];

                $totalbyar = $harga * $kuantitas;
                //$total += $jumlah_harga;
                mysqli_query($koneksi, "INSERT INTO invoice (kd_produk,quantity,harga,tgl,totalbyar,status)
     VALUES ('$kd_produk$key','$value','$harga','$tgl','$totalbyar',0)");
            }
        }
}

?>