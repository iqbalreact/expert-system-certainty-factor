<?php
	session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
	include 'db_connect.php'; //hubungkan dengan config.php untuk berhubungan dengan database
	$username=$_POST['username']; 	//tangkap data yg di input dari form login input username
	$password=$_POST['password']; 	//tangkap data yg di input dari form login input password

	$query=mysqli_query($link,"SELECT * FROM user WHERE username='$username' and password='$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	$admin=mysqli_num_rows($query);	 //melakukan pencocokan
	if($admin==TRUE){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
		// echo $highest_id;
		$query1 = mysqli_query($link, "SELECT * FROM user WHERE username='$username' and password='$password'");
		$row = mysqli_fetch_array($query1);
		$highest_id = $row[0];
		$id = json_encode($highest_id);
		echo "{\"id_pasien\":".$id."}";


	}else{   				//jika tidak tampilkan pesan gagal login
		echo "Password Anda Salah !";
	}

	// $highest_id = $row[0]['nama'];
	// $id = json_encode($highest_id);
	


?>