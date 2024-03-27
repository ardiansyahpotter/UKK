<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password= $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE nama_pengguna = '$username' AND password = '$password'");

$cek = mysqli_num_rows($login);

if ($cek>=0) {
	$data = mysqli_fetch_assoc($login);

	 if ($data['level'] == "Administrator" ){
		$_SESSION['nama_pengguna'] = $username;
		$_SESSION['password'] = $password;

	header("location:Administrator");

}else if ($data['level'] == "Resepsionis" ){
	$_SESSION['nama_pengguna'] = $username;
	$_SESSION['password'] = $password;

	header("location: Resepsionis");

}else if ($data['level'] == "Tamu" ){
	$_SESSION['nama_pengguna'] = $username;
	$_SESSION['password'] = $password;

	header("location:home.php");
} else {

		?>
		<script type="text/javascript">
			alert ("nama dan password salah ngab !");
			window.location.href = "index.php";
		</script>
		<?php
}

	}else{
?>
		<script type="text/javascript">
			alert ("nama dan password salah ngab !");
			window.location.href = "index.php";
		</script>
		<?php
	
}
?>

<!-- waduh xixixixi -->