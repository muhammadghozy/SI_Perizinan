<?php

//panggil koneksi database
include "koneksi.php";



$pass = sha1($_POST['password']);
$nim = mysqli_escape_string($koneksi, $_POST['nim']);
$password = mysqli_escape_string($koneksi, $pass);


//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tuser WHERE nim = '$nim'");
$user_valid = mysqli_fetch_array($cek_user);

//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['id'] = $user_valid['id'];
        $_SESSION['nama'] = $user_valid['nama'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['nim'] = $user_valid['nim'];
        $_SESSION['email'] = $user_valid['email'];
        $_SESSION['level'] = $user_valid['level'];
        echo "<script>alert('Login Berhasil');document.location.href='dashboard.php'</script>";
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='login.php'</script>";
}
