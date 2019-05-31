<?php 	
include ('db_connect.php');	//koneksi ke database
//panggil data yang telah disimpan didatabase untuk ditampilkan kepada user
		$query2 = "SELECT * FROM hasil INNER JOIN penyakit ON hasil.id_penyakit = penyakit.id_penyakit INNER JOIN pasien ON hasil.id_pasien=pasien.id_pasien WHERE hasil.id_pasien = 77";
		$st2= mysqli_query($link,$query2);
		$dt=mysqli_fetch_array($st2);
		print_r($dt);


		
		$nama_pasien = $dt['nm_pasien'];
		$umur = $dt['umur'];
		$jenis_kl = $dt['jenis_kl'];
		$tgl_lahir = $dt['tgl_lahir'];
		$alamat = $dt['alamat'];
		//informasi penyakit yang diderita
		$penyakit1 = $dt['nm_penyakit'];
		$deskripsi = $dt['deskripsi'];
		$penyebab = $dt['penyebab'];
		$pencegahan = $dt['pencegahan'];
		$pengobatan = $dt['pengobatan'];
		//nilai cf penyakit
		$nilaipresentase = $dt['nilaicf'];

		//simpan informasi didalam array data
		$data = array('pasien' => $nama_pasien, 'umur' => $umur, 'kelamin' =>$jenis_kl, 'tgl' => $tgl_lahir,'alamat' =>$alamat, 'penyakit' =>$penyakit1." (".$nilaipresentase."%)",'deskripsi'=>$deskripsi,'penyebab'=>$penyebab,'pencegahan'=>$pencegahan,'pengobatan'=>$pengobatan);
		//end simpan data dalam array

		$fp = fopen('results.json', 'w');
		fwrite($fp, json_encode($data)); //conver data array menjadi json dan simpan di result.json
		fclose($fp);
/*		header('Location: ../hasil.html'); //mengarahkan kehalaman hasil*/
 ?>