<?php
session_start();
include 'aksinya/koneksi.php';

$kd_produk = $_POST['kd_produk'];

    $totalbyar = $_POST['totalbyar'];
    $quantity = $_POST['quantity'];
    $_SESSION['nik'] = $_POST['nik'];
    $status = $_POST['status'];
    $total = $_POST['total'];
((bool)mysqli_query($koneksi, "USE " . $database));
    $query = mysqli_query( $koneksi, "INSERT INTO invoice  (nik, kd_produk, totalbyar, quantity, tgl, status) 
VALUES ('$nik', '$kd_produk', '$totalbyar', '$quantity', '$tgl', '$status')") or die(((is_object($koneksi)) ? mysqli_error($koneksi) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    if ($query) {
        $nik = ((is_null($___mysqli_res = mysqli_insert_id($koneksi))) ? false : $___mysqli_res);
        // masukkan dalam tabel penjualan

        if ($query) {
            $kd_penjualan = ((is_null($___mysqli_res = mysqli_insert_id($koneksi))) ? false : $___mysqli_res);

            $total = 0;
            $biaya_pengiriman = 0;

            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $value) {
                    $kd_produk = $_SESSION['items'][$key];
                    $kuantitas = $value;
                    $query_barang = mysqli_query($koneksi, "SELECT * FROM produk WHERE `kd_produk` = '$kd_produk'");
//                    $query_barang = mysqli_query($$koneksi, "SELECT * FROM produk WHERE `id` = '$barang_id'");
                    // ambil data dari data barang
                    $rs_barang = mysqli_fetch_array($query_barang);
                    $harga = $rs_barang['harga'];

                    $jumlah_harga = $harga * $kuantitas;
                    $total += $jumlah_harga;

                }
            }

            $jumlah_total = $total + $biaya_pengiriman;

            if ($query) {
                echo "Checkout sukses";

                // clear session
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        }

}