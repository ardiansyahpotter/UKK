<?php
include 'koneksi.php';

$NIK = $_POST['NIK'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];


$query = "INSERT INTO tb_tamu (NIK, nama_tamu, alamat, jenis_kelamin, no_hp) VALUES ('$NIK', '$nama_tamu', '$alamat', '$jenis_kelamin', '$no_hp')";

$query2 = "INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,password,level,no_hp) VALUES ('','$nama_tamu','$NIK','Tamu','$no_hp')";

$result = mysqli_query($koneksi, $query);
if (!$result){
			die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} 

		else {
		 echo "<script>alert('Selamat Registrasi anda berhasil.');window.location='index.php';</script>";
		 }


		$result2 = mysqli_query($koneksi, $query2);


		if (!$result2){
			die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		 echo "<script>alert('data berhasil ditambah.');window.location='index.php';</script>";
		 }

?>