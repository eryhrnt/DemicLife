<?php  
include 'conf/connection.php';
require 'fungsi.php';


if (isset($_POST["submit"])) {
	if (pposting($_POST) > 0) {
		echo "<script>
					alert('Anda berhasil membuka diskusi!');
			</script>";
	} else{
		echo mysqli_error($koneksi);
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum Pendidikan</title>
	<link rel="stylesheet" href="css/stylependidikan.css">
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
		<form name="forumBahas" action="" onsubmit="return validasiForm()" method="post">
			<div class="post">
				<h2>Forum Pendidikan</h2>
				
				<p>Apa yang ingin anda bahas?</p>
				<table>
					<tr colspan = "2">
					<td align="left"><label style="color: white" for="judul">Judul</label></td>
					<td align="center" style="color: white">:</td>
					<td align="left"><input type="text" style="border-radius: 5px; border: 0px" name="judul" id="judul"></td>
					</td>
				</table><br>
				<label for="isi">Isi :</label><br>
				<textarea style="width: 420px; height: 150px; border-radius: 5px; border: 0px; max-height: 450px;" name="isi" id="isi"></textarea>
				
				<br>
				<button type="submit" name="submit" value="Submit"><b>Post</b></button>
			</div>
		</form>
		<a style="float: right;" href="indexPendidikan.php" class="button3"><button><b>Forum</b></button></a>
		
	</section><hr>
</body>
<script type="text/javascript" src="javascript/pendidikan.js"></script>
</html>