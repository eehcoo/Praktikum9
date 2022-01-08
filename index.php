<?php 
$eko = mysqli_connect("localhost", "root","", "praktikum9");
 $result = mysqli_query($eko, "SELECT * FROM karyawan");



 ?>

<!DOCTYPE html>
<html>
<head>
<title> DATABASE KARYAWAN </title>
</head>
<body>
<h1> DAFTAR KARYAWAN </h1>
<a href="tambah.php">Tambah</a>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>No.</th>
<th>nama</th>
<th>email</th>
<th>adress</th>
<th>gender</th>
<th>position</th>
<th>status</th>
<th>Action</th>
</tr>
<?php $i = 1; ?>
<?php while ( $row = mysqli_fetch_assoc($result) ) :
 ?>
<tr>
<td><?= $i; ?></td>
<td><?= $row["name"]; ?></td>
<td><?= $row["email"]; ?></td>
<td><?= $row["adress"]; ?></td>
<td><?= $row["gender"]; ?></td>
<td><?= $row["position"]; ?></td>
<td><?= $row["status"]; ?></td>
<td>
<a href="">ubah / <a/>
<a href="hapus.php?id=<?= $row["id"]; ?>">hapus<a/>
</td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>

</body>
</html>
