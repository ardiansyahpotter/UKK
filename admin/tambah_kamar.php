<?php
include '../koneksi.php';

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
		$query = "INSERT INTO tb_kamar (id_kamar, tipe, jumlah, harga, gambar, keterangan) VALUES ('', '$tipe_kamar', '$jumlah_kamar', '$harga', '$nama_gambar_baru', '$ket_kamar')";
		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('data berhasil ditambah.');window.location='kamar.php';</script>";
		}

	}else {
		echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='kamar.php';</script>";
	}

} else {
	$query = "INSERT INTO tb_kamar (id_kamar,tipe,jumlah,harga,gambar,keterangan) VALUES ('', '$tipe_kamar','$jumlah_kamar','$harga','', '$ket_kamar')";
	$result =mysqli_query($koneksi, $query);

	if (!$result) {
		die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	} else {
		 echo "<script>alert('data berhasil ditambah.');window.location='kamar.php';</script>";
	}
}

?>