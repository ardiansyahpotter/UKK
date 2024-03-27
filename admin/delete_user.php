<?php
include '../koneksi.php';
$id_pengguna = $_GET['id'];
$query = "DELETE FROM tb_pengguna WHERE id_pengguna = $id_pengguna";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Gagal Menghapus Data: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else{

	echo "<script>alert('data Berhasil dihapus.');window.location='user.php';</script>";
}
?>