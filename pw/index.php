<?php 
$conn = mysqli_connect('localhost', 'root', '','prakweb_c_203040129_pw');
$buku = mysqli_query($conn, "SELECT * FROM buku");

$rows = [];
while($row =mysqli_fetch_assoc($buku)) {
    $rows[]= $row;
}

$buku = $rows



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Daftar Buku</title>
</head>


<body>
	<h3>Daftar Buku</h3>
	<a href="tambah.php">Tambah data buku</a>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>id</th>
			<th>Gambar</th>
			<th>judul</th>
			<th>penulis</th>
		</tr>

		<?php $i = 1;
		foreach($buku as $bk) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $bk['gambar']; ?>" width="60"></td>
			<td><?= $bk['judul']; ?></td>
			<td>
				<a href="detail.php?id=<?= $bk['id'];?>">detail buku</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>