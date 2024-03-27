<?php
include '../koneksi.php';

$id_pengguna = $_POST['id_pengguna'];
$nama_pengguna = $_POST['nama_pengguna'];
$password = $_POST['password'];
$level = $_POST['level'];
$no_hp = $_POST['no_hp'];



// if ($foto !="") {
// 	$ekstensi_diperbolehkan = array('png','jpg');
// 	$x = explode('.',$foto);
// 	$extensi = strtolower(end($x));
// 	$file_tmp = $_FILES['foto']['tmp_name'];
// 	$angka_acak = rand(1,999);
// 	$nama_gambar_baru = $angka_acak.'-'.$foto;
// 	if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
// 		move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);

		$query = "UPDATE tb_pengguna SET nama_pengguna = '$nama_pengguna', password = '$password', level = '$level', no_hp = '$no_hp' WHERE id_pengguna = '$id_pengguna'";

		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('data berhasil ditambah.');window.location='user.php';</script>";
		}

?>