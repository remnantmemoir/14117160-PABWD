<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi databse mySQL</h1>
	<?php
	$conn=mysqli_connect("localhost","root","") or die("koneksi gagal");
	mysqli_select_db ($conn,"praktikumweb");
	$hasil=mysqli_query($conn,"SELECT * FROM liga");
	while ($row=mysqli_fetch_array($hasil)){
		echo "Liga " . $row[1];
		echo " mempunyai " . $row[2];
		echo " wakil di liga champion <br>";
	}
	?>
</body>