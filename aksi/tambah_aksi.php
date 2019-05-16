<?php 
// koneksi database
include_once '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nim','$nama','$jurusan','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>