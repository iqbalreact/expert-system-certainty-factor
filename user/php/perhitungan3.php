<?php 

	include ('db_connect.php');

	$id_pasien = $_GET['id_pasien'];
	/*query untuk menampilkan hasil Diagnosa penyakit*/
	$query = "SELECT * FROM hasil INNER JOIN penyakit ON hasil.id_penyakit=penyakit.id_penyakit WHERE id_pasien=".$id_pasien." ORDER BY nilaiCF DESC LIMIT 3";
	$st2= mysqli_query($link,$query);
	while($row = mysqli_fetch_assoc($st2)){
		  $array[] = $row;
		}


	$query1 = "SELECT * FROM pasien WHERE id_pasien=".$id_pasien;
	$st3= mysqli_query($link,$query1);
	while($row3 = mysqli_fetch_assoc($st3)){
		  $array1[] = $row3;
		}

	 /*identitas pasien*/
	 $nama = $array1[0]['nm_pasien'];
	 $kelamin = $array1[0]['jenis_kl'];
	 $tgl_lahir = $array1[0]['tgl_lahir'];
	 $umur = $array1[0]['umur'];
	 $alamat = $array1[0]['alamat'];

	/* Identitas Penyakit*/
	 $penyakit = $array[0]['nm_penyakit'];
	 $deskripsi = $array[0]['deskripsi'];
	 $penyebab = $array[0]['penyebab'];
	 $pencegahan = $array[0]['pencegahan'];
	 $pengobatan = $array[0]['pengobatan'];

	 /*2 penyakit teratas dengan persentase tinggi*/
	 $penyakit1 = $array[1]['nm_penyakit'];
	 $penyakit2 = $array[2]['nm_penyakit'];
	 /*3besar hasil nilai cf penyakit */
	 $persentase = $array[0]['nilaiCF']*100;
	 $persentase1 = $array[1]['nilaiCF']*100;
	 $persentase2 = $array[2]['nilaiCF']*100;

/*	 echo "<b>Hasil Diagnosa Sistem</b><hr>";
	 echo "Nama Pasien 	: ".$nama."<hr>";
	 echo "Umur 	: ".$umur."<hr>";
	 echo "Jenis Kelamin 	: ".$kelamin."<hr>";
	 echo "Alamat 	: ".$alamat."<hr>";
	 echo "Jenis Penyakit 	: ".$penyakit."(".$persentase."%)<br>".$penyakit1."(".$persentase1."%)<br>".$penyakit2." 	(".$persentase2."%)<hr>";
	 echo "Deskripsi Penyakit 	: ".$deskripsi."<hr>";
	 echo "Penyebab Penyakit 	: ".$penyebab."<hr>";*/




	 $data = array('pasien' => $nama, 'umur' => $umur, 'kelamin' =>$kelamin, 'tgl' => $tgl_lahir,'alamat' =>$alamat, 'penyakit' =>$penyakit." (".$persentase."%)",'deskripsi'=>$deskripsi,'penyebab'=>$penyebab,'pencegahan'=>$pencegahan,'pengobatan'=>$pengobatan);

		$fp = fopen('results.json', 'w');
		fwrite($fp, json_encode($data));
		fclose($fp);

	header('Location: ../hasil.html');
