<?php 

	include ('db_connect.php');

	$id_pasien = $_GET['id_pasien'];

    $query3 = "SELECT * FROM mb INNER JOIN md ON mb.id_gejala = md.id_gejala";
 	$st2= mysqli_query($link,$query3);

 	while($row = mysqli_fetch_array($st2)) {

 	 	$cfuser = $row['nilaimb'];
 	 	$cfpakar = $row['nilaimd'];
 	 	$id_penyakit = $row['id_penyakit'];
 	 	$id_gejala = $row['id_gejala'];
/* 	 	Menghitung nilai CF gejala setiap penyakit*/
 	 	$cfgejala = $cfuser * $cfpakar;
 	 	/*simpan data nilai CF ke dalam DB*/
 	 	$query = "INSERT INTO cfgejala (id_pasien, id_gejala, id_penyakit, cfgejala) VALUES ('$id_pasien','$id_gejala','$id_penyakit','$cfgejala')";
		mysqli_query($link,$query);	

    }
    	header('Location: perhitungan2.php?id_pasien='.$id_pasien);

    
 ?>