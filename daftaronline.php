<?php
include 'koneksi.php';
$dokter 	= $_POST['nama']
$id        	= $_POST['id'];
$jam		= $_POST['jam'];
$hari		= $_POST['hari'];
$tanggal	= $_POST['tanggal'];
$query =mysqli_query($link, "INSERT INTO tbpasien SET id='$id', dokter='$nama', jam='$jam', hari='$hari', tanggal='$tanggal'");
header("location:welcomeadmin.php");
?>