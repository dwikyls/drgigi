<?php
include "koneksi.php";
$result = mysqli_query($link, "SELECT * FROM users WHERE level='Dokter'");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .form{
            padding-left: 0px;
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
            margin-right: 0px;
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
    </style>
</head>
<body>
    <a href="index.php">Kembali</a>
    <div class="form">
        <h1>Jadwal Dokter</h1>
    <table width='100%'>
    <tr>
        <th>Nama Dokter</th> <th>Senin</th> <th>Selasa</th> <th>Rabu</th><th>Kamis</th><th>Jum'at</th><th>Sabtu</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>08.00 - 15.00</td>";
        echo "<td>08.00 - 15.00</td>";
        echo "<td>08.00 - 15.00</td>";
        echo "<td>08.00 - 15.00</td>";
        echo "<td>08.00 - 15.00</td>";
        echo "<td>08.00 - 15.00</td>";
    }
    ?>
    </table>
    </div>
</body>
</html>