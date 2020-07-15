<?php 
	include 'koneksi.php';
	$id = $_GET["id"];
	mysqli_query($link, "DELETE FROM users WHERE id='$id'");
	mysqli_query($link, "DELETE FROM tbpasien WHERE id='$id'");
	mysqli_query($link, "DELETE FROM tbdokter WHERE id='$id'");
	header("location: welcomeadmin.php");
 ?>