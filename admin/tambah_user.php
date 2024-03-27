<?php
include '../koneksi.php';

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
// 	$nama_gambar_baru = $angka_acak.'-'.$foto;s
// 	if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
// 		move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
		$query = "INSERT INTO tb_pengguna (id_pengguna, nama_pengguna, password, level, no_hp) VALUES ('', '$nama_pengguna', '$password', '$level', '$no_hp')";
		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('data berhasil ditambah.');window.location='user.php';</script>";
		}

?>