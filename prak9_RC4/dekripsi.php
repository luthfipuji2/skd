<?php

error_reporting(0);
	function setupkey()
	{
		 $kcd = $_GET["key"];
		 //echo "Kunci Dekripsi = $kcd";
		 echo "<br>";
		 	for ($i = 0; $i < strlen($kcd); $i++) {
		 		$key[$i] = ord($kcd[$i]); /*rubah ASCII ke desimal*/
		 	}
				 global $mm;
				 $mm = array();
				 /*buat decrypt*/
			 for ($i = 0; $i < 256; $i++) {
			 	$mm[$i] = $i;
			 }
				 $j = $k = 0;
			 		for ($i = 0; $i < 256; $i++) {
			 			$a = $mm[$i];
			 			$j = ($j + $a + $key[$k]) % 256;
			 			$mm[$i] = $mm[$j];
			 			$mm[$j] = $a;
			 			$k++;
			 		if ($k > 15) {
			 	$k = 0;
			 }
		 }
	} /*akhir function*/

	function decrypt2($inp)
	{
	 global $mm;
	 $xx = 0;
	 $yy = 0;
	 $bb = '';
	 	$xx = ($xx + 1) % 256;
	 	$a = $mm[$xx];
	 	$yy = ($yy + $a) % 256;
	 	$mm[$xx] = $b = $mm[$yy];
	 	$mm[$yy] = $a;
			 /*proses XOR antara chipertext dengan kunci
			 dengan $inp sebagai chipertext
			 dan $mm sebagai kunci*/
				 $bb = ($inp ^ $mm[($a + $b) % 256]) % 256;
				 return $bb;
	}


	setupkey();
		$nmfile = "enkripsirc4.txt";
		/*ambil data dari file enkripsirc4.txt*/
		$fp = fopen($nmfile, "r");
		$isi = fread($fp, filesize($nmfile));
		echo "<br>";
			//echo "Chipertext : $isi"."<br>";
			for ($i = 0; $i < strlen($isi); $i++) {
			 $b[$i] = ord($isi[$i]); /*rubah ASCII ke desimal*/
			 $d[$i] = decrypt2($b[$i]); /*proses dekripsi RC4*/
			 $s[$i] = chr($d[$i]); /*rubah desimal ke ASCII*/
			}
				echo "<br>";
				echo "Hasil Dekripsi = ";
					for ($i = 0; $i < strlen($isi); $i++) {
					 echo $s[$i];
					}
				echo "<br>";
				echo "<br>";
		?>
		<html>Go to : <a href="form_dekripsi.php">FORM DEKRIPSI</a> | <a
		href="index.php">FORM ENKRIPSI</a>
		<html>