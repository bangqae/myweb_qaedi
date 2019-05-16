<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'akademik'; //nama DB

$koneksi = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
 
 //Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

//mysqli_connect('localhost','root','','akademik');
?>