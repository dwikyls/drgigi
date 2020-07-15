<?php
include 'koneksi.php';
$id = $_POST['id'];
$query=mysqli_query($link, "DELETE from users where id");
header("location:welcome.php");
?>