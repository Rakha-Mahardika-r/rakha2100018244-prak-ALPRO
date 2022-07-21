<?php
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$email =$_POST['email'];
$nohp =$_POST['nohp'];
$status =$_POST['status'];
$sewa =$_POST['sewa'];
$hari =$_POST['hari'];
$tanggal =$_POST['tanggal'];
$pesan =$_POST['pesan'];
$fp = fopen("guestbook.txt","a+");
fputs($fp,"$nama|$alamat|$email|$nohp|$status|$sewa|$hari|$tanggal|$pesan\n");
fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
	<title>BABEH KOST</title>
	<style type="text/css">
		.wrap{
			background: #34495e;
			width:100%;
			height: 100%;
			margin: 0px;
		}

		/*bagian header*/
		.wrap .header{
			background: #34495e;
			color: #bdc3c7;
			font-family: monospace;
			font-size: 15px;
			padding: 3px 15px;
		}
		 
		/*bagian menu*/
		.wrap .menu{
			background: yellow;
		}
		 
		.wrap .menu ul{
			padding: 0;
			margin: 0;
			background: #7f8c8d;
			overflow: hidden;
		}
		 
		.wrap .menu ul li{
			float: left;
			font-family: monospace;
			font-size: 15px;
			list-style-type: none;
			padding: 10px;
		}
		.wrap .menu ul li a{
			background: #7f8c8d; 
			color:#d4d4d4;
		}
		.wrap .menu ul li a: hover{
			background: #4da4ff; 
			color:#fff;
		}
		/*akhir menu*/
		 
		 
		.badan{
			height: 450px;
		}

		.wrap .badan .content{
			background: #ecf0f1;
			text-align: center;
			height: 100%;
			width: 100%;	
		}

		.tmbl{
			margin: 10px auto;
			clear: both;
			text-align: center;
		}

		.tombol{
			margin: 3px;
			height: 30px auto;
			padding: 5px 10px;
			color: #fff;
			background-color: #006894;
			border: 3px solid #006894;
			float: none;
			display: inline-block;
			text-decoration: none;
			overflow: hidden;
			text-align: center;
			transition: all 0.2s ease;
			line-height: 1.6;
			font-size: 16px;
			font-family: monospace;
		}
		.tombol:hover{
			background-color:#fff;
			color: #006894;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<h1>BABEH KOST</h1>
			<p>Tempat Kost Pilihan di kota Tegal</p>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="galery.html">Gallery & Facility</a></li>
				<li><a href="daftar.html">Pemesanan</a></li>			
			</ul>
		</div>
		<div class="badan">
			<div class="content">
				<h3>TERIMAKASIH TELAH MENGISI FORMULIR</h3>
				<p>Staff kami akan menghubungi anda secepatnya untuk mengkorfirmasi pesanan. <br>Silahkan ditunggu dalam 1x24 jam.</p>
				<div class="tmbl">
					<a href="index.html" class="tombol" title="Klik Disini">Kembali ke Home</a>
				</div>
			</div>
		</div>
</body>
</html>