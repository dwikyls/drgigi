<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
        <style type="text/css">
            body{
                background-color: #a83251;
            }
            .container{
                padding: 50px;
                width: 660px;
                max-height:1000px;
                background-color: #327da8;
                font-family: Lucida Sans Unicode;
                font-size: 30px;
                margin-top: 0px;
                margin-left: 350px;
                color: white;
                border-radius: 20px;
            }
            button{
                height: 50px;
                width: 660px;
                border-radius: 20px;
                font-size: 30px;
                color: white;
                background-color: #fc4e03;
                border:none;
                border: 2px solid white;
            }
            a{
                font-family: Baloo;
                border-radius: 20px;
                background-color: #fc4e03;
                height: 50px;
                width: 110px;
                font-size: 30px;
                padding: 10px;
                position: absolute;
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
            <a href="welcomeadmin.php">Kembali</a>
        <div class="container">
        <form method="post" action="inputadmin.php">
            <table>
                <tr><td>Nama</td><td><input type="text" name="nama" style="height: 40px; width: 500px"></td></tr>
                <tr><td>Username</td><td><input type="text" name="username" style="height: 40px; width: 500px"></td></tr>
                <tr><td>Password</td><td><input type="text" name="password" style="height: 40px; width: 500px"></td></tr>
                <tr><td>Status</td><td>
                        <input type="radio" name="level" value="Dokter">Dokter
                        <input type="radio" name="level" value="Pasien">Pasien
                        <input type="radio" name="level" value="Pasien">Admin
                </td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
        </div>
    </body>
</html>
<!-- nambah,edit,delete data -->
<!-- tb user, level, jadwal, daftar onlen(hari,tanggal,id dokter, id pasien,keterangan(dipakai histori), 
no antrian), laporan(bulanan), -->
