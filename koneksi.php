<!-- <?php 
$koneksi = mysqli_connect("localhost","root","","si_perizinan");
// $koneksi = mysqli_connect("localhost","si","nq7NqisGaJ9cA1hP","dbperizinan");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
// ?>  -->

 <?php

error_reporting(0);
 
//MySQLi Object-Oriented
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'si_perizinan');

// define('HOST','localhost');
// define('USER','si');
// define('PASS','nq7NqisGaJ9cA1hP');
// define('DB1', 'dbperizinan');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
 
?>