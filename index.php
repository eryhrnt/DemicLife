<?php

include 'conf/connection.php';
$koneksi = mysqli_connect("localhost", "root", "", "tubes");
$result = mysqli_query($koneksi, "SELECT * FROM user");

//while ($user = mysqli_fetch_assoc($result)) {
//	var_dump($user);
//}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar User</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Password</th>
			<th>Email</th>
			
		</tr>

		<?php $i = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["username"]; ?></td>
			<td><?= $row["password"]; ?></td>
			<td><?= $row["email"]; ?></td>
			
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>
</body>
</html>