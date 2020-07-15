<?php
include 'koneksi.php';
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$level    	    = $_POST['level'];
$query=mysqli_query($link, "UPDATE users SET nama='$nama', username='$username', password='$password', level='$level' where id='$id'");
header("location:welcomeadmin.php");
?>