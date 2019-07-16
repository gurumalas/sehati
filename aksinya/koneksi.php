<?php

	$host ="localhost";
	$user ="root";
	$password ="";
	$database ="sehati";

$koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $password));
((bool)mysqli_query($koneksi, "USE " . $database));
$tanggal=date("d/m/Y");

if ($koneksi)
{
	echo "berhasil : )";
}else{
	?>
	<script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?php
}

?>

