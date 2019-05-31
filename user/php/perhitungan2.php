<?php 

	include ('db_connect.php');
	$id_pasien = $_GET['id_pasien'];

	$penyakit = "SELECT id_penyakit FROM penyakit";
	$st2= mysqli_query($link,$penyakit);


	while($row2 = mysqli_fetch_assoc($st2)){
		$id_penyakit = $row2['id_penyakit'];

		$query = mysqli_query($link,"SELECT * FROM cfgejala WHERE id_penyakit=".$id_penyakit);
		$array = array();
		while($row = mysqli_fetch_assoc($query)){
		  $array[] = $row;
		}

		if ($result1 = $link->query("SELECT * FROM cfgejala WHERE id_penyakit =".$id_penyakit)) {
		$row_cnt1 = $result1->num_rows;
		$result1->close();
		}

		echo "<br>ID Penyakit : ".$array[0]['id_penyakit']."<br>";
		$cfgejalaOLD = $array[0]['cfgejala'];
			for ($i=1; $i <$row_cnt1; $i++) { 
				$cfgejalaNEW = $array[$i]['cfgejala'];
				$cfgejalaOLD = $cfgejalaOLD+$cfgejalaNEW*(1-$cfgejalaOLD);
			}
		 $query4 = "INSERT INTO hasil (id_pasien, id_penyakit, nilaiCF) VALUES ('$id_pasien','$id_penyakit','$cfgejalaOLD')";
		mysqli_query($link,$query4);
	}

	header('Location: perhitungan3.php?id_pasien='.$id_pasien);



?>