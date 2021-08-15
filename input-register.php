<?php
$koneksi = mysqli_connect("localhost", "root", "", "si_perizinan");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "imhere";
    var_dump($_POST);
    $nama            = $_POST['nama'];
    $nim             = $_POST['nim'];
    $email           = $_POST['email'];
    $alamat          = $_POST['alamat'];
    $no_telp         = $_POST['notelp'];
    $password        = $_POST['password'];
    $level           = 'Mahasiswa';
    $simpan = "INSERT INTO tuser (id, nama, nim, email,alamat, no_telp, password, level) VALUES('','$nama','$nim','$email','$alamat','$no_telp','$password', '$level')";
    $result = mysqli_query($koneksi, $simpan);
    var_dump($result);
    if ($result) {
        echo "<script>alert('Akun berhasil dibuat');document.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Akun gagal dibuat');document.location.href='register.php';</script>";
    }
}
