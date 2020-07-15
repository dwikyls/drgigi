<?php
include 'koneksi.php';
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$level         = $_POST['level'];
$query=mysqli_query($link, "INSERT INTO users SET nama='$nama', username='$username', password='$password', level='$level'");
header("location:index.php");
?>