<?php
session_start();
?>

Selamat Datang Users <?php echo $_SESSION['nama']?>

<a href="logout.php">Logout</a>