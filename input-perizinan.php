<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama            = $_POST['Nama_mahasiswa'];
    echo $nama;
    $NIM             = $_POST['NIM'];
    echo $NIM;
    $alamat          = $_POST['Alamat'];
    echo $alamat;
    $notelp          = $_POST['Telp'];
    echo $notelp;
    $judulpenelitian = $_POST['Judul_Penelitian'];
    echo $judulpenelitian;
    $pembimbing      = $_POST['Pembimbing'];
    echo $pembimbing;
    $laboratorium    = $_POST['Laboratorium'];
    echo $laboratorium;
    $syarat1         = $_POST['Syrt_1'];
    echo $syarat1;
    $syarat2         = $_POST['Syrt_2'];
    echo $syarat2;
    $syarat3         = $_POST['Syrt_3'];
    echo $syarat3;
    $syarat4         = $_POST['Syrt_4'];
    echo $syarat4;
    $syarat5         = $_POST['Syrt_5'];
    echo $syarat5;
    $syarat6         = $_POST['Syrt_6'];
    echo $syarat6;
    $syarat7         = $_POST['Syrt_7'];
    echo $syarat7;
    $syarat8         = $_POST['Syrt_8'];
    echo $syarat8;
    $syarat9         = $_POST['Syrt_9'];
    echo $syarat9;
    $tglmulai        = $_POST['tgl_mulai'];
    echo $tglmulai;
    $tglselesai      = $_POST['tgl_selesai'];
    echo $tglselesai;
    $wktmulai        = $_POST['wkt_mulai'];
    echo $wktmulai;
    $wktselesai      = $_POST['wkt_selesai'];
    echo $wktselesai;
    $query = "INSERT INTO tb_form_lab1 (Nama_mahasiswa, NIM, Alamat, Telp, Judul_Penelitian, Pembimbing, Laboratorium, Syrt_1, Syrt_2, Syrt_3, Syrt_4, Syrt_5, Syrt_6, Syrt_7, Syrt_8, Syrt_9, tgl_mulai, tgl_selesai, wkt_mulai, wkt_selesai) VALUES('$nama','$NIM','$alamat','$notelp','$judulpenelitian','$pembimbing','$laboratorium','$syarat1','$syarat2','$syarat3','$syarat4','$syarat5','$syarat6','$syarat7','$syarat8','$syarat9','$tglmulai','$tglselesai','$wktmulai', '$wktselesai')";
    $result = mysqli_query($koneksi, $query);
    var_dump($result);
    if ($result) {
      echo "<script>alert('Permintaan terkirim');</script>";
    } else {
      echo "<script>alert('Permintaan gagal dibuat!');</script>";
    }
  }
