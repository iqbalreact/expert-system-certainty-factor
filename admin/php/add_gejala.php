<?php 
	include ('db_connect.php');
	$kd_gejala = $_POST ['kd_gejala'];
	$gejala = $_POST ['gejala'];

	$query = "INSERT INTO `gejala`(`kd_gejala`, `gejala`) VALUES ('$kd_gejala','$gejala')";
	mysqli_query($link,$query);
	// header('Location: ../dt_gejala.php');
	
 ?>