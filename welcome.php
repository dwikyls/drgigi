<?php
session_id();
session_start();
include "koneksi.php";
$result = mysqli_query($link, "SELECT * FROM users");
?>

<html>
<head>    
    <title>Homepage</title>
    <style type="text/css">
    	img{
    		width: 700px;
    		height: 600px;
    		position: absolute;
    	}
    	h1{
    		margin-top: 50px;
    		margin-left: 800px;
    		margin-bottom: 100px;
    	}
    	a{
    		border-radius: 5px;
    		color: white;
            background-color: #2d87d6;
            font-family: Arial;
    		float: left;
    		margin: 20px;
    		margin-left: 800px;
    		padding: 10px;
    		text-decoration: none;
    	}
    </style>
</head>
<body>
	<img src="gambar1.jpg">
    <h1>Selamat Datang <?php echo $_SESSION['nama']?></h1>
    <a href="updatedata.php">Edit username & password</a><br/>
    <a href="daftaronline.php">Daftar Online</a><br/>
    <a href="history.php">History</a><br/>
    <a href="index.php">Logout</a><br/>
</body>
</html>