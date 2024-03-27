<?php
include '../koneksi.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$jumlah_kamar = $_POST['jumlah_kamar'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$ket_kamar = $_POST['ket_kamar'];


if ($foto !="") {
	$ekstensi_diperbolehkan = array('png','jpg');
	$x = explode('.',$foto);
	$extensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_gambar_baru = $angka_acak.'-'.$foto;
	if (in_array($extensi, $ekstensi_diperbolehkan) === true) {
		move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);

		$query = "UPDATE tb_kamar SET tipe = '$tipe_kamar', jumlah = '$jumlah_kamar', harga = '$harga', gambar = '$nama_gambar_baru', keterangan = '$ket_kamar' WHERE id_kamar = '$id_kamar'";

		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('data berhasil ditambah.');window.location='kamar.php';</script>";
		}

	}else {
		echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='kamar.php';</script>";
	}

} else {
	$query = "UPDATE tb_kamar SET tipe = '$tipe_kamar', jumlah = '$jumlah_kamar', harga = '$harga', keterangan = '$ket_kamar' WHERE id_kamar = '$id_kamar'";

	$result =mysqli_query($koneksi, $query);

	if (!$result) {
		die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	} else {
		 echo "<script>alert('data berhasil ditambah.');window.location='kamar.php';</script>";
	}
}

?>