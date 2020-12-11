<?php
include 'conf/connection.php';
require 'fungsi.php';
$result = mysqli_query($koneksi, "SELECT * FROM hiburan");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum Kesehatan</title>
	<link rel="stylesheet" href="css/indexH.css">
</head>
<body>
	<header>
		<div class="judul">
			<h1 style="color: white">DemicLife</h1>
		</div>

		<div class="logo">
			<img src="asset/biohazard.png">
		</div>
		<div class="fitur">
			<b><a href="homeDemic.html">Home</a></b>
			<b><a href="forum.html">Forum</a></b>
			<b><a href="Calorie Calculator.html">Diet</a></b>

			<a href="login.php" class="button1"><button><b>Masuk</b></button></a>
			<a href="sign_in.php" class="button2"><button><b>Daftar</b></button></a>
		</div>
		
	</header>

	<nav>
		<div align="center" class="navigasi">
			<b><a href="kesehatan.php">Kesehatan</a></b>
			<b><a href="hiburan.php">Hiburan</a></b>
			<b><a href="pendidikan.php">Pendidikan</a></b>
		</div>
	</nav>

	<section>
		<div class="tabel">
			<table style="color: white; border-color: lightblue; padding: 20px" border="10" cellpadding="10" cellspacing="0">
				<tr style="color: white">
					<th style="color: white; font-size: 20px">No.</th>
					<th width="15%" style="color: white; font-size: 20px">Judul</th>
					<th width="100%" style="color: white; font-size: 20px">Bahasan</th>
				</tr>

				<?php $i = 1; ?>
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>

				<tr style="color: white">
					<td style="color: white"><?= $i; ?></td>
					<td style="color: white"><?= $row["judul"]; ?></td>
					<td style="color: white"><?= $row["isi"]; ?></td>
				</tr>

				<?php $i++; ?>
				<?php endwhile; ?>
			</table>
		</div>

	</section>

</body>
</html>