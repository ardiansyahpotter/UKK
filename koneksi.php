<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "reservasi_ardiansyah";
$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
	die("koneksi dengan database gagal: ".mysqli_connect_error());
	# code...
}

?>