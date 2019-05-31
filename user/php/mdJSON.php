<?php
 
include('db_connect.php');
 
 $query = "SELECT * FROM `md` LEFT JOIN penyakit ON penyakit.id_penyakit = md.id_penyakit LEFT JOIN gejala ON gejala.id_gejala = md.id_gejala GROUP BY gejala";
 $result = mysqli_query($link,$query) or die(mysqli_error());
 
 $arr = array();
	while ($row = mysqli_fetch_assoc($result)) {
	    $temp = array(
	    "nilai"=> $row["nilai"],
	    "Gejala"=> $row["gejala"]);
	    array_push($arr, $temp);
	}
	 
	$data = json_encode($arr);
	echo $data;
	 
	/*echo "{\"data\":" . $data . "}";*/
	?>