<?php 

	include ('db_connect.php');
	$nm_pasien = $_POST ['nm_pasien'];
	$umur = $_POST ['umur'];
	$jenis_kl = $_POST ['jenis_kl'];
	$tgl_lahir = $_POST ['tgl_lahir'];
	$alamat = $_POST ['alamat'];

	$query = "INSERT INTO pasien (nm_pasien, umur, jenis_kl, tgl_lahir, alamat) VALUES ('$nm_pasien','$umur','$jenis_kl','$tgl_lahir','".$alamat."')";
	
	mysqli_query($link,$query);

	$query1 = mysqli_query($link, "SELECT * FROM `pasien` WHERE `pasien`.`nm_pasien`= '".$nm_pasien."'");
	$row = mysqli_fetch_array($query1);
	$highest_id = $row[0];
	$id = json_encode($highest_id);
	echo "{\"id_pasien\":".$id."}";

	 
	/*echo "{\"data\":" . $data . "}";*/
 ?>