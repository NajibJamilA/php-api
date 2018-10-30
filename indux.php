<?php
$conn = mysqli_connect("localhost","root","","php-api");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database timeout : " . mysqli_connect_error();
}

function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$box = [];
		while ($data = mysqli_fetch_assoc($result)) {
			$box[] = $data;
		}
		return $box;
	}

$students = query("SELECT * FROM users");

?>


<html>
	<head>
		<title>Tabel</title>
	</head>
	<body>
		<h3>TABEL</h3>
		<table border="1px" cellpadding="10" cellspacing="0">
	 		<tr>
	 			<td bgcolor="#6f87f2" align="center">Id</td>
	 			<td bgcolor="#6f87f2" align="center">Username</td>
	 			<td bgcolor="#6f87f2" align="center">Level</td>
	 			<td bgcolor="#6f87f2" align="center">Fullname</td>
				<td bgcolor="#6f87f2" align="center">Actions</td>
	 		</tr>
	 		<?php foreach($students as $student) : ?>
				 <tr>
				 	<td><?= $student["id"] ?></td>
				 	<td><?= $student["username"] ?></td>
				 	<td><?= $student["level"] ?></td>
				 	<td><?= $student["fullname"] ?></td>
					<td>
						<a href="ditedit.php?id=<?php echo $student['id']; ?>">Ubah</a>
						<a href="delete.php?id=<?php echo $student['id']; ?>">Hapus</a>
					</td>
				 </tr>
				<?php endforeach; ?>
	 	</table>
		<a href="formr.php">Tambah (+)</a>
 	</body>
</html>
