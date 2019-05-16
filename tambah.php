<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD</title>
</head>
<body>
	<h2>Aplikasi CRUD</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="aksi/tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>