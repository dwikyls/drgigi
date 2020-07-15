<?php
include 'koneksi.php';
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$jk				= $_POST['jk'];
$usia			= $_POST['usia'];
$query 			= mysqli_query($link, "UPDATE users SET nama='$nama', username='$username', password='$password' where id='$id'");
$query 		   .= mysqli_query($link, "UPDATE tbpasien SET jk='$jk', usia='$usia' where id='$id'");
header("location:welcomeadmin.php");
?>