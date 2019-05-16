<?php
	include_once 'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD</title>
</head>
<body>
	<h2>Aplikasi CRUD</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<h3>LIHAT DATA MAHASISWA</h3>
<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 		
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa"); //tabel mahasiswa
		while($d = mysqli_fetch_array($data)){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$d['nama']."</td>";
			echo "<td>".$d['nim']."</td>";
			echo "<td>".$d['jurusan']."</td>";
			echo "<td>".$d['alamat']."</td>";
			echo "<td>";
			echo	"<a href='edit.php?id=$d[id];'>EDIT </a>";
			echo	"<a href='aksi/hapus.php?id=$d[id];'>HAPUS</a>";
			echo "</td>";
			echo "</tr>";	
		}
		?>
	</table>
</body>
</html>


