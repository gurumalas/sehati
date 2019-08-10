<?php
include "aksinya/koneksi.php";
$nik = $_POST['nik'];
$password = md5($_POST['password']);
$sql = mysqli_query($koneksi, "SELECT * FROM member WHERE nik='$nik'");


// pastikan username dan password adalah berupa huruf atau angka.

$login=mysqli_query($koneksi, "SELECT * FROM member WHERE nik='$nik' AND password='$password'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
    session_start();
    $_SESSION[nik]     = $r[nik];
    $_SESSION[password]     = $r[password];
        header('location:index.php');

}
else{
    // include "error-login.php";
    // include "index.php";
    echo "<script>alert('Password Dan Username salah !'); window.location = 'index.php'</script>";
}
?>
