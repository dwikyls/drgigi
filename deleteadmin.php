<?php
include 'koneksi.php';
$id = $_POST['id'];
$query=mysqli_query($link, "DELETE from users where id!='1'");
header("location:welcomeadmin.php");
?>