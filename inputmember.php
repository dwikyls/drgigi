<?php
include 'koneksi.php';
$id        	= $_POST['id'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$jk   = $_POST['jk'];
$usia   = $_POST['usia'];
$query =mysqli_query($link, "INSERT INTO users SET id='$id', nama='$nama', username='$username', password='$password', level='Pasien'");
$query.=mysqli_query($link, "INSERT INTO tbpasien SET id='$id', jk='$jk', usia='$usia'");
header("location:welcomeadmin.php");
?>