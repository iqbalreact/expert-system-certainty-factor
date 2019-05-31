<?php
	include('db_connect.php');
	$kd_gejala = $_POST ['kd_gejala'];
	$gejala = $_POST ['gejala']; 

	$query = "UPDATE `gejala` SET `gejala` = '$gejala' WHERE `gejala`.`kd_gejala` = '$kd_gejala'";
	
	mysqli_query($link,$query);

		header('Location: ../dt_gejala.php');
?>
