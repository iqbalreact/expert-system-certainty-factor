<?php
 
include('db_connect.php');
$query1 = mysqli_query($link, "SELECT MAX(id_pasien) FROM pasien");
$row = mysqli_fetch_array($query1);
$highest_id = $row[0];

$id = json_encode($highest_id);
echo "{\"id_pasien\":".$id."}";


// print_r($highest_id);

 
 // $query = "SELECT MAX(id_pasien) FROM pasien";
 // $result = mysqli_query($link,$query) or die(mysqli_error());
 
 // $arr = array();
	// while ($row = mysqli_fetch_assoc($result)) {
	//     $temp = array(
	//     "kd_gejala"=> $row["id_pasien"]);
	//     // "Gejala"=> $row["gejala"]);
	//     array_push($arr, $temp);
	// }
	 
	// $data = json_encode($arr);
	// echo $data;
	 
	/*echo "{\"data\":" . $data . "}";*/
	?>