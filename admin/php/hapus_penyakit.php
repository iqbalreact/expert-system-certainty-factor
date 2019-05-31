<?php
	include('db_connect.php');

	$id = $_GET['kd_penyakit'];

	echo $id;

	// $query = "DELETE FROM penyakit WHERE kd_penyakit=".$id;
	// mysqli_query($link,$query);

	// header('Location: ../dt_penyakit.php');
?>