<?php
	include('db_connect.php');
	$kode = $_GET['kd_penyakit'];

	// echo $id;

	$query = "DELETE FROM `penyakit` WHERE `penyakit`.`kd_penyakit` = '".$kode."'";
	mysqli_query($link,$query);
	header('Location: ../dt_penyakit.php');
?>