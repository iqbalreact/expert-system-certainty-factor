<?php
 
include('db_connect.php');

 $id_user = $_GET['id'];
 $query = "SELECT * FROM `log_diagnosis` INNER JOIN `penyakit` ON log_diagnosis.kd_penyakit = penyakit.kd_penyakit WHERE id_user=".$id_user;
 $result = mysqli_query($link,$query) or die(mysqli_error());	

//  print_r($result);

 $arr = array();
	while ($row = mysqli_fetch_assoc($result)) {
	    $temp = array(
	    "id_log"=> $row["id_log"],
	    "id_user"=> $row["id_user"],
	    "penyakit"=> $row["nm_penyakit"],
	    "nilaicf"=> $row["nilaicf"],
	    "date" => $row["date_diagnosis"]);
	    array_push($arr, $temp);
	}
	 
	$data = json_encode($arr);
	echo $data;
	 
	/*echo "{\"data\":" . $data . "}";*/
?>