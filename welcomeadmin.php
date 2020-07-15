<?php
include "koneksi.php";
$result = mysqli_query($link, "SELECT * FROM users");
?>

<html>
<head>    
    <title>Homepage</title>
    <style type="text/css">
        .navbar{
            margin-left: 300px;
            float: left;
            margin-top: 20px;
        }
        .navbar a{
            border-radius: 10px;
            font-family: Arial;
            color: white;
            background-color: #2d87d6;
            text-decoration: none;
            padding: 20px;
            font-size: 20px;
        }
        .form{
            padding-left: 150px;
            padding-top: 100px;
        }
        table {
          font-family: Arial, Helvetica, sans-serif;
          color: #666;
          text-shadow: 1px 1px 0px #fff;
          background: #eaebec;
          border: #ccc 1px solid;
        }
        table th {
          padding: 15px 35px;
          border-left:1px solid #e0e0e0;
          border-bottom: 1px solid #e0e0e0;
          background: #ededed;
        }
        table tr {
          text-align: center;
          padding-left: 20px;
        }
        table td {
          padding: 15px 35px;
          border-top: 1px solid #ffffff;
          border-bottom: 1px solid #e0e0e0;
          border-left: 1px solid #e0e0e0;
          background: #fafafa;
          background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
          background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }
        h1{
            margin-right: 200px;
            text-align: center;
            font-family: sans-serif;
        }
        td a{
            border-radius: 5px;
            padding: 5px;
            color: #424140;
            background-color: #bab7b6;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="tambahadmin.php" style="margin-left: 80px;">Add New Admin</a>
        <a href="tambahdokter.php">Add New Dokter</a>
        <a href="tambahmember.php">Add New Member</a>
        <a href="index.php" style="margin-left: 250px;">Logout</a>
    </div>
    <div class="form">
        <h1>Data User Gigi</h1>
    <table width='80%'>
    <tr>
        <th>Id</th> <th>Nama</th> <th>Level</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['level']."</td>";  
        echo "<td><a href='updatedataadmin.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
    </div>
</body>
</html>