<?php
include 'koneksi.php';
$id             =$_POST['id'];
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$posisi         = $_POST['posisi'];
$query=mysqli_query($link, "UPDATE users SET nama='$nama', username='$username', password='$password', posisi='$posisi' where id='$id'");
header("location:welcome.php");
?>