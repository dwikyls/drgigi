<?php
include'koneksi.php';
session_start();
$query = mysqli_query($link,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        h1{
            font-family: Lucida Sans Unicode;
        }
        .container{
            font-family: Baloo;
            font-size: 25px;
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
    <div class="container" style="height: 60px; width: 1364px; background-color: #327da8">
        
            <a href="dataadmin.php" style="width: 658px;">Tambahkan Data</a>
            <a href="index.php" style="width: 658px;">Logout</a>
        
    </div>
    <div class="container2">
        <h1>Data Users Dr. Gigi</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_array($query))
        {
            echo '<tr style="text-align: center">
                    <td>'.$row['id'].'</td>
                    <td>'.$row['nama'].'</td>
                    <td>'.$row['level'].'</td>
                    <td style="text-align: center"><a href="updatedataadmin.php">Edit</a> <a href="deleteadmin.php" method="post">Delete</a></td>
                </tr>';
        }?>
        </tbody>
    </table>
    </div>
</body>
</html>