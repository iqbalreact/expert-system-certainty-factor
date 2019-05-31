<?php
 
include('db_connect.php');
 
 $query = "SELECT * FROM `log_diagnosis` WHERE id_user=";
 $result = mysqli_query($link,$query) or die(mysqli_error());

 $arr = array();
	while ($row = mysqli_fetch_assoc($result)) {
	    $temp = array(
	    "Penyakit"=> $row["nm_penyakit"],
	    "Deskripsi" => $row["deskripsi"]);
	    array_push($arr, $temp);
	}
	 
	$data = json_encode($arr);
	echo $data;
	 
	/*echo "{\"data\":" . $data . "}";*/
?>