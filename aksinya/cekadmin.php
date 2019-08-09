<?php
include "../aksinya/koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");


// pastikan username dan password adalah berupa huruf atau angka.

$login=mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
    session_start();
    $_SESSION[username]     = $r[username];
    $_SESSION[password]     = $r[password];
    header('location:../backend/index.php');

}
else{
    // include "error-login.php";
    // include "index.php";
    echo "<script>alert('Password Dan Username salah !'); window.location = '../backend/login.php'</script>";
}
?>
