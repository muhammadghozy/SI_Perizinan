<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama            = $_POST['Nama_mahasiswa'];
    $NIM             = $_POST['NIM'];
    $alamat          = $_POST['Alamat'];
    $notelp          = $_POST['Telp'];
    $judulpenelitian = $_POST['Judul_Penelitian'];
    $pembimbing      = $_POST['Pembimbing'];
    $laboratorium    = $_POST['Laboratorium'];
    $syarat1         = $_POST['Syrt_1'];
    $syarat2         = $_POST['Syrt_2'];
    $syarat3         = $_POST['Syrt_3'];
    $syarat4         = $_POST['Syrt_4'];
    $syarat5         = $_POST['Syrt_5'];
    $syarat6         = $_POST['Syrt_6'];
    $syarat7         = $_POST['Syrt_7'];
    $syarat8         = $_POST['Syrt_8'];
    $syarat9         = $_POST['Syrt_9'];
    $tglmulai        = $_POST['tgl_mulai'];
    $tglselesai      = $_POST['tgl_selesai'];
    $wktmulai        = $_POST['wkt_mulai'];
    $wktselesai      = $_POST['wkt_selesai'];
    $query = "INSERT INTO tb_form_lab1 (Nama_mahasiswa, NIM, Alamat, Telp, Judul_Penelitian, Pembimbing, Laboratorium, Syrt_1, Syrt_2, Syrt_3, Syrt_4, Syrt_5, Syrt_6, Syrt_7, Syrt_8, Syrt_9, tgl_mulai, tgl_selesai, wkt_mulai, wkt_selesai) VALUES('$nama','$NIM','$alamat','$notelp','$judulpenelitian','$pembimbing','$laboratorium','$syarat1','$syarat2','$syarat3','$syarat4','$syarat5','$syarat6','$syarat7','$syarat8','$syarat9','$tglmulai','$tglselesai','$wktmulai', '$wktselesai')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
      echo "<script>alert('Permintaan terkirim');</script>";
    } else {
      echo "<script>alert('Permintaan gagal dibuat!');</script>";
    }
  }
