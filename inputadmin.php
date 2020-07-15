<?php
include 'koneksi.php';
$id 	        = $_POST['id'];
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$query=mysqli_query($link, "INSERT INTO users SET nama='$nama', username='$username', password='$password', level='Admin'");
header("location:welcomeadmin.php");
?>