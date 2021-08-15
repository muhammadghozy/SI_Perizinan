<?php
$koneksi = mysqli_connect("localhost", "root", "", "si_perizinan");
// $koneksi = mysqli_connect("localhost","si","nq7NqisGaJ9cA1hP","dbperizinan");
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
