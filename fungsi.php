<?php 

include 'conf/connection.php';
$koneksi = mysqli_connect("localhost", "root", "", "tubes");

function registerasi($data){
	global $koneksi;

	$usr_name = strtolower($data["usr_name"]);
	$email = strtolower($data["email"]);
	$psw = mysqli_real_escape_string($koneksi, $data["psw"]);
	$psw_repeat = mysqli_real_escape_string($koneksi, $data["psw_repeat"]);

	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$usr_name'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Username yang dipilih sudah ada')
			</script>";
		return false;
	}

	if ($psw !== $psw_repeat) {
		echo "<script>
				alert('Konfirmasi password tidak sama')
			</scrpt>";
		return false;
	}

	$psw = password_hash($psw, PASSWORD_DEFAULT);

	mysqli_query($koneksi, "INSERT INTO user (username, email, password) VALUES('".$_POST['usr_name']."', '".$_POST['email']."', '".$_POST['psw']."')");
	return mysqli_affected_rows($koneksi);
}

function kposting($data){
	global $koneksi;

	$judul = $data["judul"];
	$isi = $data["isi"];

	$query = "INSERT INTO kesehatan VALUES('','$judul', '$isi')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function hposting($data){
	global $koneksi;

	$judul = $data["judul"];
	$isi = $data["isi"];

	$query = "INSERT INTO hiburan VALUES('','$judul', '$isi')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function pposting($data){
	global $koneksi;

	$judul = $data["judul"];
	$isi = $data["isi"];

	$query = "INSERT INTO pendidikan VALUES('','$judul', '$isi')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

?>