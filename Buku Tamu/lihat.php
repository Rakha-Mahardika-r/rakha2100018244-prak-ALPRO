<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Guest Book</title>
</head>
<body>
	<h2 align="center">Table Guest Book</h2>
	<p align= "center"><a href="tampilan.php">::Isi Buku Tamu::</a></p>

	<hr color="black">

	<table border=1 align="center" width=80%>
		<tr>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Status</th>
			<th>Alamat</th>
			<th>Komentar</th>
		</tr>
		<?php
		$query = mysqli_query($conn, "SELECT * FROM tbl_tamu");
		while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= date('Y-m-d'); ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['alamat']; ?></td>
				<td><?= $data['email']; ?></td>
				<td><?= $data['status']; ?></td>
				<td><?= $data['komentar']; ?></td>
			</tr>

		<?php } ?>
	</table>



</body>
</html>