<?php
	include('db_connect.php');
	$kode = $_GET['kd_gejala'];
	$query = "DELETE FROM `gejala` WHERE `gejala`.`kd_gejala` = '".$kode."'";

	mysqli_query($link,$query);
	header('Location: ../dt_gejala.php');
?>