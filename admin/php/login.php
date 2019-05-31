<?php
	session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
	include 'db_connect.php'; //hubungkan dengan config.php untuk berhubungan dengan database
	$username=$_POST['username']; 	//tangkap data yg di input dari form login input username
	$password=$_POST['password']; 	//tangkap data yg di input dari form login input password

	$query=mysqli_query($link,"SELECT * FROM admin WHERE username='$username' and pass='$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	$admin=mysqli_num_rows($query);	 //melakukan pencocokan
	if($admin==TRUE){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
		$_SESSION['username']=$username;  //jika cocok, buat session dengan nama sesuai dengan username
		header("location: ../dashboard.php");     // dan alihkan ke index.php
	}else{   				//jika tidak tampilkan pesan gagal login
		header("location: ../");
	}


?>