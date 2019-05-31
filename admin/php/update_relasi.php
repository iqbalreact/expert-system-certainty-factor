<?php
	include('db_connect.php');
	$kd_penyakit = $_POST['kd_penyakit'];
	$kd_gejala = $_POST['kd_gejala'];
	$mb = $_POST['mb'];
	$md = $_POST ['md'];  

	// echo $kd_penyakit;
	// echo $kd_gejala;
	echo $query = "UPDATE `relasi` SET `mb` = '$mb',  `md` = '$md'  WHERE `relasi`.`kd_penyakit` = '$kd_penyakit' and `relasi`.`kd_gejala` = '$kd_gejala'";
	
	mysqli_query($link,$query);
	header('Location: ../dt_relasi.php');
?>
