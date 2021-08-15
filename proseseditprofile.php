<?php
session_start();
include "koneksi.php";

// if(isset($POST['submit'])){
    $nama         = $_POST['Nama_mahasiswa'];
    $email        = $_POST['Email'];
    $NIM          = $_POST['NIM'];
    $alamat       = $_POST['Alamat'];
    $no_telp      = $_POST['no_telp'];
    
    $simpan = "UPDATE tuser SET nama='$nama',nim='$NIM',email='$email',alamat='$alamat',no_telp='$no_telp' WHERE id='".$_SESSION['id']."'"; 

    $result = mysqli_query($db1,$simpan);

    if ($result){
        echo "<script type='text/javascript'>alert('Profil Telah Berhasil Diperbarui');window.location='perizinan.php'</script>";
    }
// }
echo"luar";
