<?php
include '../koneksi.php';

$id_fasi = $_POST['id_fasi'];
$nama_fasilitas = $_POST['nama_fasilitas'];
$foto = $_FILES['foto']['name'];


if ($foto !="") {
	$ekstensi_diperbolehkan = array('png','jpg');
	$x = explode('.',$foto);
	$extensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_gambar_baru = $angka_acak.'-'.$foto;
	if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
		move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);

		$query = "UPDATE tb_fasilitas_umum SET nama_fasilitas = '$nama_fasilitas', gambar = '$nama_gambar_baru' WHERE id_fasilitas_umum = '$id_fasi'";

		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('data berhasil diupdate.');window.location='fasilitas.php';</script>";
		}

	}else {
		echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='fasilitas.php';</script>";
	}

} else {
	$query = "UPDATE tb_fasilitas_umum SET nama_fasilitas = '$nama_fasilitas' WHERE id_fasilitas_umum = '$id_fasi'";

	$result =mysqli_query($koneksi, $query);

	if (!$result) {
		die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	} else {
		 echo "<script>alert('data berhasil ditambah.');window.location='fasilitas.php';</script>";
	}
}

?>