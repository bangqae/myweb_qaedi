<?php 
// koneksi database
include_once '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
?>