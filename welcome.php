<?php
include'koneksi.php';
$query = mysqli_query($link,"SELECT nama, jam, hari, tanggal FROM users INNER JOIN jadwal ON users.id = jadwal.id");
session_start();
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
        
            <a href="data.php" style="width: 658px; ">Tambahkan Data</a>
            <a href="index.php" style="width: 658px">Logout</a>
        
    </div>
    <div class="container2">
        <h1>Kegiatan Anda</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Dokter</th>
                <th>Jam</th>
                <th>Hari</th>
                <th>tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_array($query))
        {
            echo '<tr style="text-align: center">
                    <td>'.$row['nama'].'</td>
                    <td>'.$row['jam'].'</td>
                    <td>'.$row['hari'].'</td>
                    <td>'.$row['tanggal'].'</td>
                    <td style="text-align: center"><a href="updatedataadmin.php">Edit</a>   <a href="deleteadmin.php" method="post">Delete</a></td>
                </tr>';
        }?>
        </tbody>
    </table>
    </div>
</body>
</html>