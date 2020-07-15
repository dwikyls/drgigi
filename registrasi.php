<?php
include 'koneksi.php';

function acakangkahuruf($panjang)
{
	$karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
	$string = '';
    for ($i = 0; $i < $panjang; $i++) {
  		$pos = rand(0, strlen($karakter)-1);
  		$string .= $karakter{$pos};
    }
    return $string;
}
$username = acakangkahuruf(10);
$password = acakangkahuruf(10);

$id 		= $_POST['id'];
$nama       = $_POST['nama'];
$usia       = $_POST['usia'];
$jk       	= $_POST['jk'];
$query 		= mysqli_query($link, "INSERT INTO tbpasien SET jk='$jk', usia='$usia', id='$id'");
$query 		.= mysqli_query($link, "INSERT INTO users SET id='$id', nama='$nama', username='$username', password='$password', level='Pasien'");
echo"<script>alert('login');</script>";
header("location: welcome.php");
?>