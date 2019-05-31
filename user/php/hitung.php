<?php 

	
	include ('db_connect.php');	//koneksi ke database
	
	$id_pasien = $_POST ['id_pasien']; //id pasien
	$gejalas = $_POST ['gejala']; //id gejala yang dipilih user
	
	// print_r($gejalas);
	foreach ($gejalas as $key => $gejala) {

		$gejalaexplode = explode('|', $gejala);
		$gejalaId = $gejalaexplode[0];
		$gejalaNilai = $gejalaexplode[1];
		if ($gejalaNilai != 0) {
			$gejalaSelected[] = array('id' => $gejalaId, 'nilai' => $gejalaNilai);
		}

	}
	$gejaladipilih = count ($gejalaSelected);

	if ($gejaladipilih < 2) {
		echo "Pilih Minimal 2 Gejala!";
	}
	else{
		
		// print_r ($gejalaSelected);
		foreach ($gejalaSelected as $gejalaSelect) {

			$id_gejalanya = $gejalaSelect['id'];
			$nilainya = $gejalaSelect['nilai'];

			// panggil data gejala terpilih di relasi
			$query = "SELECT * FROM relasi WHERE kd_gejala= '".$id_gejalanya."'"; //ambil data di tabel relasi berdasarkan id gejala yang dipilih
			$st = mysqli_query($link,$query);
			// end panggil data relasi
			foreach ($st as $keynilai) {
				$keynilai += ["cfuser" => $nilainya]; //push nilai cfuser ke array relasi

				$result[$keynilai['kd_penyakit']][] = $keynilai;
			}
		}

		//pemanggilan grup data berdasarkan id dan menghitung nilai cf kombinasi
		foreach ($result as $key2 => $key3) {
		   $jumlahdata = count($key3);
		   
		   $cfuser = $key3[0]['cfuser'];
		   $cfpakar = $key3[0]['mb'] - $key3[0]['md'];
		   $cfold =  $cfpakar * $cfuser; //set cfold gejala
		   $nm_penyakit = $key3[0]['kd_penyakit']; //set name cfold cfgejala
		   for ($i=1; $i < $jumlahdata ; $i++) { 
			   $id_penyakit = $key3[$i]['kd_penyakit']; //set cfold dan cfnew cfgejala
               $cfnew = $key3[$i]['cfuser'] * ($key3[$i]['mb'] - $key3[$i]['md']); //set cfold dan cfnew cfgejala
			   $cfold = $cfold+$cfnew*(1-$cfold); //rumus kombinasional

		   }

		   $hasil = $cfold*100; //menghitung nilai presentase terhadap penyakit
		   $nilaicf[] = array('nilaicf' => $hasil,'kd_penyakit' => $nm_penyakit); //simpan nilai cf penyakit ke dalam array $nilaicf
	    }

	   rsort($nilaicf); //mengurutkan nilai cf penyakit tertinggi
	   
	   $nama_penyakit = $nilaicf[0]['kd_penyakit']; //ambil id penyakit di array 0 untuk disimpan didalam databse
	   $presentase = $nilaicf[0]['nilaicf']; //ambil nilai cf pada array 0 untuk disimpan didalam database
	   $tanggaldiagnosis = date("Y-m-d");

	   $query1 = "INSERT INTO log_diagnosis (`id_user`, `kd_penyakit`, `nilaicf`, `date_diagnosis`) VALUES ('$id_pasien','$nama_penyakit','$presentase','$tanggaldiagnosis')";
	   mysqli_query($link,$query1);

	   $lastid = mysqli_insert_id($link);

	   $query2 = "SELECT * FROM log_diagnosis INNER JOIN user ON log_diagnosis.id_user = user.id_user INNER JOIN penyakit ON log_diagnosis.kd_penyakit=penyakit.kd_penyakit WHERE log_diagnosis.id_log =".$lastid;
	   $st2= mysqli_query($link,$query2);
	   $dt=mysqli_fetch_array($st2);
  
  
		  //identitas pasien
		  $id_log = $dt['id_log'];
		  $nama_pasien = $dt['nama'];
		  $jenis_kl = $dt['kelamin'];
		  $tgl_lahir = $dt['tgl_lahir'];
		  $alamat = $dt['alamat'];
		  //
		  //informasi penyakit yang diderita
		  $penyakit1 = $dt['nm_penyakit'];
		  $deskripsi = $dt['deskripsi'];
		  $pencegahan = $dt['pencegahan'];
		  $pengobatan = $dt['pengobatan'];
		  //
		  //nilai cf penyakit
		  $nilaipresentase = $dt['nilaicf'];
		  //
		  $tanggaldiagnosis = $dt['date_diagnosis'];
  
		  //simpan informasi didalam array data
		  $data = array('id_log' =>$id_log, 'pasien' => $nama_pasien, 'kelamin' =>$jenis_kl, 'tgl' => $tgl_lahir,'alamat' =>$alamat, 'penyakit' =>$penyakit1,'deskripsi'=>$deskripsi,'pencegahan'=>$pencegahan,'pengobatan'=>$pengobatan, 'nilaicf'=>$nilaipresentase, 'date'=>$tanggaldiagnosis);
		  //end simpan data dalam array
		  
		//Buat file json
		$fp = fopen('results.json', 'w');
		fwrite($fp, json_encode($data)); //conver data array menjadi json dan simpan di result.json
		fclose($fp);
		/*selesai menampilkan data*/

	} 
		

 ?>