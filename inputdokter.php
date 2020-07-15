<?php
include 'koneksi.php';
$id        	= $_POST['id'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$jam		= $_POST['jam'];
$hari		= $_POST['hari'];
$tanggal	= $_POST['tanggal'];
$query =mysqli_query($link, "INSERT INTO users SET id='$id', nama='$nama', username='$username', password='$password', level='Dokter'");
$query .=mysqli_query($link, "INSERT INTO tbdokter SET id='$id', jam='$jam', hari='$hari', tanggal='$tanggal', kuota=10");
header("location:welcomeadmin.php");
?>