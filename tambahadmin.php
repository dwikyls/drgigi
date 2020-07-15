<?php
    include 'koneksi.php';
    if(isset($_POST['update'])){ 
        $id         = $_POST['id'];
        $nama       = $_POST['nama'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $query =mysqli_query($link, "INSERT INTO users SET id='$id', nama='$nama', username='$username', password='$password', level='Admin'");
    header("location:welcomeadmin.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
        <style type="text/css">
        .container{
            width: 300px;
            padding: 10px;
            margin-top: 100px;
            margin-left: 500px;
            font: bold 15px/24px "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 15px;
        }
        .container tr td input{
            height: 40px;
            background-color: #d8ebe9;
            outline: none;
            border: none;
            width: 400px;
            border-radius: 5px;
        }
        .container td button{
            height: 40px;
            font-size: 15px;
            color: white;
            background-color: #2f87ad;
            outline: none;
            border: none;
            width: 100px;
            border-radius: 5px;
            cursor: pointer;
            font-family: Baloo;
        }
        a{

            font-family: Baloo;
            color: white;
            background-color: #2d87d6;
            border-radius: 5px;
            position: absolute;
            padding: 10px;
            text-decoration: none;
        }
        h1{
            margin-left: 600px;
        }
    </style>
    </head>
    <body>
        <a href="welcomeadmin.php">Kembali</a>
        <h1>Tambah Admin</h1>
        <div class="container">
        <form method="post" >
            <table>
                <td>ID</td>
                <tr>
                    <td><input type="text" name="id"></td>
                </tr>
                <td>Nama</td>
                <tr>
                    <td><input type="text" name="nama"></td>
                </tr>
                <td>Username</td>
                <tr>
                    <td><input type="text" name="username"></td>
                </tr>
                <td>Password</td>
                <tr>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td><button name="update">Tambah</button></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>