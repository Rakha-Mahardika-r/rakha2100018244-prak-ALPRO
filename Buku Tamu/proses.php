<?php
include "config.php";

if(isset($_POST['submit'])){
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$email = $_POST["email"];
	$status = $_POST["status"];
	$komentar = $_POST["komentar"];

	$sql = mysqli_query($conn, "INSERT INTO tbl_tamu(nama, alamat, email, status,komentar) VALUES('$nama', '$alamat', '$email', '$status', '$komentar')");

	if($sql)
	{
		echo "<script>
		alert('Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu');
		window.location.href='lihat.php';
		</script>";
	}
}
?>