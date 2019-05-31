<?php
	include('db_connect.php');
	$kd_penyakit = $_GET['kd_penyakit'];
	$kd_gejala = $_GET['kd_gejala'];
	// $query = "DELETE FROM relasi WHERE id_relasi=" .$id;

	$query = "DELETE FROM `relasi` WHERE `relasi`.`kd_penyakit` = '$kd_penyakit' and `relasi`.`kd_gejala` = '$kd_gejala'" ;

	mysqli_query($link,$query);
	header('Location: ../dt_relasi.php');
?>