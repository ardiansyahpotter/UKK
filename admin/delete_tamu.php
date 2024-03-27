<?php
include '../koneksi.php';
$NIK = $_GET['id'];
$query = "DELETE FROM tb_tamu WHERE NIK = $NIK";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Gagal Menghapus Data: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else{

	echo "<script>alert('data Berhasil dihapus.');window.location='tamu.php';</script>";
}
?>