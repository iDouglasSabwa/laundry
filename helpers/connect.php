<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'laun';

$con = mysqli_connect($host,$user,$pass,$db);

if (!$con) {
	# code...
	echo "Database connection error".mysqli_error($con);
}

 ?>