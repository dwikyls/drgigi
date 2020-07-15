<?php
include 'koneksi.php';
if(isset($_POST['update']))
{ 
$id         = $_POST['id'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$jk         = $_POST['jk'];
$usia       = $_POST['usia'];
$spesial    = $_POST['spesial'];
$query =mysqli_query($link, "INSERT INTO users SET id='$id', nama='$nama', username='$username', password='$password', level='Dokter'");
$query.=mysqli_query($link, "INSERT INTO tbdokter SET id='$id', jk='$jk', usia='$usia', spesial='$spesial'");
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
            margin-top: 10px;
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
        select{
            height: 40px;
            background-color: #d8ebe9;
            outline: none;
            border: none;
            width: 400px;
            border-radius: 5px;
        }
        a{
            font-family: Baloo;
            color: white;
            background-color: #2d87d6;
            border-radius: 5px;
            position: absolute;
            margin-left: 10px;
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
        <h1>Tambah Dokter</h1>
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
                <td>Usia</td>
                <tr>
                    <td><input type="text" name="usia"></td>
                </tr>
                <td>Jenis Kelamin</td>
                <tr>
                    <td><select name="jk">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select></td>
                </tr>
                <td>Spesialis</td>
                <tr>
                    <td><input type="text" name="spesial"></td>
                </tr>
                <tr>
                    <td><button name="update">Tambah</button></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>