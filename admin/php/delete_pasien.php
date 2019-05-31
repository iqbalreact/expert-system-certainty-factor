<?php
	include('db_connect.php');
	$id = $_GET['id_pasien'];
	$kd_penyakit = $_GET['kd_penyakit'];
	// $query = "DELETE FROM hasil WHERE id_hasil=" .$id;

	$query = "DELETE FROM `pasien` WHERE `pasien`.`id_pasien` = '$id'";
	// echo $id;
	mysqli_query($link,$query);
	header('Location: ../dt_pasien.php');
?>