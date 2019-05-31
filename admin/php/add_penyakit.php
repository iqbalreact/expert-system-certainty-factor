<?php 

	include ('db_connect.php');
	$kd_penyakit = $_POST ['kd_penyakit'];
	$nm_penyakit = $_POST ['nm_penyakit'];
	$deskripsi = $_POST ['deskripsi'];
	$pencegahan = $_POST ['pencegahan'];
	$pengobatan = $_POST ['pengobatan'];

	$query = "INSERT INTO penyakit (kd_penyakit, nm_penyakit, deskripsi, pencegahan, pengobatan) VALUES ('$kd_penyakit','$nm_penyakit','".$deskripsi."','".$pencegahan."','".$pengobatan."')";
	mysqli_query($link,$query);	
	// header('Location: ../dt_penyakit.php');
 ?>