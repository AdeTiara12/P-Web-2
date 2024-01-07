<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

	$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

	echo "Daftar Negara Asean Awal : </br> </br>";
	foreach($negara as $asean){
	echo "<li>$asean </li>";
	}

	echo "</br></br>";

	echo "Daftar Negara Asean Akhir : </br> </br>";
	$akhir = array_push($negara, "Laos", "Flipina", "Myanmar");
	foreach($negara as $final){
		echo "<li> $final </li>";
	}


	 ?>

</body>
</html>