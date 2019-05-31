<?php 

	include ('db_connect.php');
	$nama = $_POST ['nama'];
	$jenis_kl = $_POST ['jenis_kl'];
	$tgl_lahir = $_POST ['tgl_lahir'];
	$alamat = $_POST ['alamat'];
	$username = $_POST ['username'];
	$password = $_POST ['password'];

	$check = mysqli_query($link,"SELECT * FROM user WHERE username='$username'");

	$checkrows = mysqli_num_rows($check);


	if($checkrows>0) {
   		echo "Username Telah Digunakan !";
     	// echo '<script type="text/javascript">alert ("Data Relasi Telah Tersedia !"),window.history.back(); </script>';
    } 
    else {  
   		$query = "INSERT INTO `user`(`nama`, `kelamin`, `tgl_lahir`, `alamat`, `username`, `password`) VALUES ('$nama','$jenis_kl','$tgl_lahir','".$alamat."','$username','$password')";
		mysqli_query ($link,$query);
		// echo "Relasi Berhasil Ditambahkan";
    }


 ?>