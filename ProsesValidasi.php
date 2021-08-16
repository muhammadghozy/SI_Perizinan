<?php
include 'koneksi.php';

$today = date('Y-m-d');

if (isset($_GET['id']) && isset($_GET['posisi'])) {
    $id = $_GET['id'];
    $posisi = $_GET['posisi'];
    $query = "SELECT * FROM tb_form_lab WHERE Id='$id'";
    $nama = $_GET['nama'];
    $dewan1 = $koneksi->prepare($query);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
    $row = $res1->fetch_assoc();

    if ($posisi == "acc_pembimbing") {
        $tgl_acc = "tgl_acc_pembimbing";
    }
    if ($posisi == "acc_kalab") {
        $tempat = "Kalab";
        $tgl_acc = "tgl_acc_kalab";
        if ($row[$posisi] == 0) {
            $query = "UPDATE tb_form_lab SET $tempat = '$nama' WHERE ID='$id'";
            $result2 = mysqli_query($koneksi, $query);
            $update = "UPDATE tb_form_lab SET $posisi = 1, $tgl_acc ='$today' WHERE Id=$id";
            $result = mysqli_query($koneksi, $update);
            if ($result) {
                echo "<script>window.location='validasiformulir.php';</script>";
            } else {
                echo "<script>alert('Gagal melakukan validasi')</script>";
            }
        } else if ($row[$posisi] == 1) {
            $query = "UPDATE tb_form_lab SET $tempat = '$nama' WHERE ID='$id'";
            $result2 = mysqli_query($koneksi, $query);
            $update = "UPDATE tb_form_lab SET $posisi = 0, $tgl_acc = 0000-00-00 WHERE Id=$id";
            $result = mysqli_query($koneksi, $update);
            if ($result) {
                echo "<script>window.location='validasiformulir.php';</script>";
            } else {
                echo "<script>alert('Gagal melakukan validasi')</script>";
            }
        }
    }
    if ($posisi == "acc_fakultas") {
        $tempat = "Tim_Fakultas";
        $tgl_acc = "tgl_acc_fakultas";
        if ($row[$posisi] == 0) {
            $query = "UPDATE tb_form_lab SET $tempat = '$nama' WHERE ID='$id'";
            $result2 = mysqli_query($koneksi, $query);
            $update = "UPDATE tb_form_lab SET $posisi = 1, $tgl_acc ='$today' WHERE Id=$id";
            $result = mysqli_query($koneksi, $update);
            if ($result) {
                echo "<script>window.location='validasiformulir.php';</script>";
            } else {
                echo "<script>alert('Gagal melakukan validasi')</script>";
            }
        } else if ($row[$posisi] == 1) {
            $query = "UPDATE tb_form_lab SET $tempat = '$nama' WHERE ID='$id'";
            $result2 = mysqli_query($koneksi, $query);
            $update = "UPDATE tb_form_lab SET $posisi = 0, $tgl_acc = 0000-00-00 WHERE Id=$id";
            $result = mysqli_query($koneksi, $update);
            if ($result) {
                echo "<script>window.location='validasiformulir.php';</script>";
            } else {
                echo "<script>alert('Gagal melakukan validasi')</script>";
            }
        }
    }
}
