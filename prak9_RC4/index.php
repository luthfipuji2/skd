<html>
	<head>
		<title>FORM ENKRIPSI</title>
	</head>
	<body>
		<form action="enkripsi.php" method="get">
			<div style="text-align: center;"><span style="font-weight:
				bold;">FORM ENKRIPSI</span> 
			</div>
			Plainteks : 
			<br>
				<textarea cols="50" rows="6" name="kata"
				maxlength="255">
				</textarea>
			<br>
			Key : 
				<input type="text" name="key" maxlength="16">
			<br>
				<input type="submit" value="Kirim">
				<input type="reset" value="Reset">
			<br>
			<br>
			Go to : <a href="form_dekripsi.php">FORM DEKRIPSI</a><br>
		</form>
	</body>
</html>