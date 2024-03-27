<?php
include '../koneksi.php';
$nama_fasilitas = $_GET['id'];
$query = "DELETE FROM tb_fasilitas_umum WHERE id_fasilitas_umum = $nama_fasilitas";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Gagal Menghapus Data: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else{

	echo "<script>alert('data Berhasil dihapus.');window.location='fasilitas.php';</script>";
}
?>