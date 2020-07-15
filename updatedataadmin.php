<?php
include 'koneksi.php';
if(isset($_POST['update']))
{   
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $result     = mysqli_query($link, "UPDATE users SET nama='$nama',username='$username',password='$password' WHERE id=$id");
    header("Location: welcomeadmin.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($link, "SELECT * FROM users WHERE id=$id");
while($user_data = mysqli_fetch_array($result)){
    $nama       = $user_data['nama'];
    $username   = $user_data['username'];
    $password   = $user_data['password']; 
}
?>
<html>
<head>  
    <title>Edit User Data</title>
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
    <h1>Edit Data User</h1>
    <div class="container">
        <form method="post">
        <table>
            <td>Nama</td>
            <tr>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <td>Username</td>
            <tr>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <td>Password</td>
            <tr>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            </tr>
            <td><button name="update">Simpan</button></td>
        </table>
    </form>
    </div>
</body>
</html>

