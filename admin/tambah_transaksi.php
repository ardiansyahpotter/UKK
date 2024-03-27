<?php
include "../koneksi.php";

$NIK = $_POST['NIK'];
$id_kamar = $_POST['id_kamar'];
$jumlah_pesan = $_POST['jumlah_pesan'];
$jumlah_orang = $_POST['jumlah_orang'];
$tgl_chek_in = $_POST['tgl_chek_in'];
$tgl_chek_out = $_POST['tgl_chek_out'];
$total_harga =

$query = "INSERT INTO tb_transaksi (id_transaksi, NIK, id_kamar, jumlah_pesan, jumlah_orang, tgl_chek_in, tgl_chek_out, status) VALUES ('', '$NIK', '$id_kamar', '$jumlah_pesan', '$jumlah_orang', '$tgl_chek_in', '$tgl_chek_out','1')";

$result = mysqli_query($koneksi, $query);
if (!$result){
			die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} 

		else {
		 echo "<script>alert('data berhasil ditambah.');window.location='transaksi.php';</script>";
		 }
?>