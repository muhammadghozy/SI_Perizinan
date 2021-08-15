<?php

$koneksi = mysqli_connect("localhost", "root", "", "si_perizinan");

if(isset($_POST['submit'])){
    $namalengkap    = $_POST['nama_lengkap'];

    $simpan = "INSERT INTO coba VALUES ('$namalengkap')";

    $result = mysqli_query($koneksi, $simpan);

    if ($result){
        echo "<script type='text/javascript'>window.location='login.php';alert('Data Telah Berhasil Disimpan');</script>";
}
}
echo "luar";

?>