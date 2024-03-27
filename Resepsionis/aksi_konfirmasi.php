<?php
include '../koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$status = $_POST['status'];

if ($status == 1) {
	
		$query = "UPDATE tb_transaksi SET status = '2' WHERE id_transaksi = '$id_transaksi'";
		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('data berhasil dikonfirmasi.');window.location='transaksi.php';</script>";
		}

	}else{
		$query = "UPDATE tb_transaksi SET status = '1' WHERE id_transaksi = '$id_transaksi'";
		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
		echo "<script>alert('batal konfirmasi berhasil.');window.location='transaksi.php';</script>";
		}
	}

?>