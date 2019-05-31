<?php
	include('db_connect.php');
	$kd_penyakit = $_POST ['kd_penyakit'];
	$nm_penyakit = $_POST ['nm_penyakit'];
	$deskripsi = $_POST ['deskripsi']; 
	$pencegahan = $_POST ['pencegahan'];
	$pengobatan = $_POST ['pengobatan'];


	$query = "UPDATE `penyakit` SET `nm_penyakit` = '$nm_penyakit', `deskripsi` = '$deskripsi',`pencegahan` = '$pencegahan', `pengobatan` = '$pengobatan' WHERE `penyakit`.`kd_penyakit` = '$kd_penyakit'";
	
	mysqli_query($link,$query);
	$query;
	header('Location: ../dt_penyakit.php');
?>
