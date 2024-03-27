<?php
include '../koneksi.php';
$id_kamar = $_GET['id'];
$query = "DELETE FROM tb_kamar WHERE id_kamar = $id_kamar";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Gagal Menghapus Data: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else{

	echo "<script>alert('data Berhasil dihapus.');window.location='kamar.php';</script>";
}
?>