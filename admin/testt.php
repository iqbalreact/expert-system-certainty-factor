
<?php 	
		// nilai N akhir with loop; 
		// nilai D akhir with loop; 
		for ($i=1; $i<=8 ; $i++) {
			$n = $a_pred[$i]*$z[$i];
			$nakhir =+ $n;
			$d = $a_pred[$i];
			$dakhir =+ $d;
		}

		// nilai N akhir with loop; 
		echo "Nilai N : ". $nakhir;
		echo "Nilai D : ". $dakhir;
		

		$hasilmetode = $nakhir/$dakhir;
		echo "Hasil Metode : ". $hasilmetode;
	
?>