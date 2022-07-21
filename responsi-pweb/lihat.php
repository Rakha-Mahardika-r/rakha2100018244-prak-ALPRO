<?php
	echo "<head><title>My Guest Book</title></head>" ;
	$fp = fopen("guestbook.txt","r");
	echo "<h2 align=center>Table Guest Book</h2>";
	echo "<p align= center><a href=tampilan.html>::Isi Buku Tamu::</a></p>";
	echo "<hr / color=black>";
	echo "<table border=1 align=center width=80%>";
	echo "<tr><td>Tanggal</td><td>Nama</td><td>Email</td><td>Status</td><td>Alamat</td><td>Komentar</td></tr>";
	while ($isi = fgets($fp,80))
	{
		$pisah = explode("|", $isi);
		echo "<tr>";
		echo "<td>";
		echo date('Y-m-d');
		echo "</td>";
		echo "<td>$pisah[0]</td>";
		echo "<td>$pisah[2]</td>";
		echo "<td>$pisah[3]</td>";
		echo "<td>$pisah[1]</td>";
		echo "<td>$pisah[4]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>