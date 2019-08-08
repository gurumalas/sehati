<?php
include "../aksinya/koneksi.php";
$username = $_GET['username'];
$password = md5($_GET['password']);
$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");


// pastikan username dan password adalah berupa huruf atau angka.

$login=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
    session_start();
    $_SESSION[username]     = $r[username];
    $_SESSION[password]     = $r[password];
    $_SESSION[level]    = $r[level];


    if($_SESSION[level]== s){
        header('location:../backend/index.php');
    }else{
     include "error-login.php";
    // include "index.php";
//    echo "<script>alert('Password Dan Username salah !'); window.location = 'index.php'</script>";
}
}
?>
