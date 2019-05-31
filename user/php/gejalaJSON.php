<?php
 
include('db_connect.php');
 
 $query = "SELECT * FROM `gejala`";
 $result = mysqli_query($link,$query) or die(mysqli_error());
 
 $arr = array();
	while ($row = mysqli_fetch_assoc($result)) {
	    $temp = array(
	    "kd_gejala"=> $row["kd_gejala"],
	    "Gejala"=> $row["gejala"]);
	    array_push($arr, $temp);
	}
	 
	$data = json_encode($arr);
	echo $data;
	 
	/*echo "{\"data\":" . $data . "}";*/
	?>