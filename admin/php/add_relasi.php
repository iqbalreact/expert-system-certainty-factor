<?php 

	include ('db_connect.php');
	$kd_penyakit = $_POST ['kd_penyakit'];
  $kd_gejala = $_POST ['kd_gejala'];
  $mb = $_POST ['mb'];
	$md = $_POST ['md'];
	// $cfpakar = $_POST ['cfpakar'];

	$check = mysqli_query($link,"SELECT * FROM relasi WHERE kd_penyakit='$kd_penyakit' and kd_gejala='$kd_gejala'");

	$checkrows = mysqli_num_rows($check);

   if($checkrows>0) {
   	 echo "Relasi Telah Tersedia !";
     // echo '<script type="text/javascript">alert ("Data Relasi Telah Tersedia !"),window.history.back(); </script>';
   } 
   else {  
    //insert results from the form input
    $query = "INSERT INTO relasi(kd_penyakit, kd_gejala, mb, md) VALUES ('$kd_penyakit','$kd_gejala','$mb','$md')";
    mysqli_query($link,$query)  or die('Error querying database.');	
	// header('Location: ../dt_relasi.php');
	echo "Relasi Berhasil Ditambahkan";
    }


 ?>