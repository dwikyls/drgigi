<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        h1{
            font-family: Lucida Sans Unicode;
            text-align: center;
        }
        .container{
            font-family: Baloo;
            font-size: 25px;
            height: 60px; width: 1364px; background-color: #327da8;
        }
        .container a{
            text-align: center;
            text-decoration: none;
            padding: 12px;
            float: left;
            color: white;
            background-color: #327da8;
        }
        tbody a{
            text-decoration: none;
            color: black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $_SESSION['nama']?></h1>
    <div class="container">
            <a href="diagnosa.php" style="width: 430px;">Diagnose</a>
            <a href="history.php" style="width: 430px;">History</a>
            <a href="index.php" style="width: 432px;">Logout</a>        
    </div>
</body>
</html>