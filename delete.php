<?php
include 'koneksi.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query="DELETE FROM tb_form_lab WHERE Id = '$id'";
    $dewan1 = $koneksi->prepare($query);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
    echo "<script>window.location='validasiformulir.php';</script>";
}
