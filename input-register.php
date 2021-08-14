<?php
var_dump($_POST);
$koneksi = mysqli_connect("localhost","root","","si_perizinan");
if($_SERVER['REQUEST_METHOD'] == "POST"){
echo 'imhere';
if(isset($_POST['signin'])){
    $nama            = $_POST['nama'];
    $nim             = $_POST['nim'];
    $email           = $_POST['email'];
    $alamat          = $_POST['alamat'];
    $no_telp         = $_POST['notelp'];
    $password        = $_POST['password'];
    $level           = 'Mahasiswa';

    $simpan = "INSERT INTO (id, nama, nim, email,alamat, no_telp, password, level) tuser VALUES('','$nama','$nim','$email','$alamat','$no_telp','$password', '$level')";
    
    $result = mysqli_query($koneksi,$simpan);

    if ($result){
        echo "<script>alert('Data Telah Berhasil Disimpan');document.location.href='login.php';</script>";
    }
    }
}
echo "luar";
