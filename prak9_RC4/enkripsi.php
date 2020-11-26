<?php
	error_reporting(0);
		function setupkey()
		{ /*proses pengacakan kunci SBox*/
		 echo "<br>";
		 $kce = $_GET["key"];
		 echo "Kunci enkripsi = $kce";
		 echo "<br>";
		 //strlen => hitung jumlah string, ord => ngembaliin nilai unicode dari string karakter
			 for ($i = 0; $i < strlen($kce); $i++) {
			 	$key[$i] = ord($kce[$i]); /*rubah ASCII ke desimal*/
			 }
				 global $m;
				 $m = array();
			 /*Proses inisialisasi S-Box (Array S) => array 256*/
			 for ($i = 0; $i < 256; $i++) {
			 	$m[$i] = $i;
			 }

			 $j = $k = 0;
		 	//proses pengacakan S-Box =>permutasi fungsi dan kunci
			 for ($i = 0; $i < 256; $i++) {
				 $a = $m[$i];
				 $j = ($j + $m[$i] + $key[$k]) % 256;
				 $m[$i] = $m[$j];
				 $m[$j] = $a;
				 $k++;
					 if ($k > 15) {
					 $k = 0;
			 }
		 }
	}


	function crypt2($inp)
	{ //pembangkitan kunci
		 global $m;
			 $x = 0;
			 $y = 0;
			 $bb = '';
			 $x = ($x + 1) % 256;
			 $a = $m[$x];
			 $y = ($y + $a) % 256;
			 $m[$x] = $b = $m[$y];
			 $m[$y] = $a;
				 /*proses XOR antara plaintext dengan kunci
				 dengan $inp sebagai plaintext
				 dan $m sebagai kunci*/
					 $bb = ($inp ^ $m[($a + $b) % 256]) % 256; //^ adalah xor
					 	return $bb;
	}

	$kalimat = $_GET["kata"];
		setupkey();
			for ($i = 0; $i < strlen($kalimat); $i++) {
			 $kode[$i] = ord($kalimat[$i]); /*rubah ASCII ke desimal*/
			 $b[$i] = crypt2($kode[$i]); /*proses enkripsi RC4*/
			 $c[$i] = chr($b[$i]); /*rubah desimal ke ASCII*/
			}
		echo "<br>";
		
			//echo "Kalimat ASLI : ";
					for ($i = 0; $i < strlen($kalimat); $i++) {
		 	//echo $kalimat[$i];
			}
		echo "<br>";
		echo "Hasil enkripsi = ";
			$hsl = '';
					for ($i = 0; $i < strlen($kalimat); $i++) {
			 	echo $c[$i];
			 $hsl = $hsl . $c[$i];
			}
		echo "<br>";
		/*simpan data di file*/
			$fp = fopen("enkripsirc4.txt", "w");
			fputs($fp, $hsl); //fputs => nyimpan string
			fclose($fp);
			echo "<br>";
?>
	<html>Go to : <a href="form_dekripsi.php">FORM DEKRIPSI</a>
	<html>