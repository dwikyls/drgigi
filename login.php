<?php
        session_start();
        include 'koneksi.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $login = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level']=="Admin"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['nama']     = $data['nama'];
        $_SESSION['level']    = "Admin";
        header("location:welcomeadmin.php");
    }else if($data['level']=="Dokter"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['nama']     = $data['nama'];
        $_SESSION['level'] = "Dokter";
        header("location:welcome.php");
    }else if($data['level']=="Pasien"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['nama']     = $data['nama'];
        $_SESSION['level'] = "Pasien";
        header("location:welcome.php");
    }else{
        header("location:index.php?pesan=gagal");
    }  
}else{
        header("location:index.php?pesan=gagal");
}
 
?>