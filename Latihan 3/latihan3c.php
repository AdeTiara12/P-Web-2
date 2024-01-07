<?php

function pangkat($angka, $pangkat) 
{
	$a = $angka;
	$b = $pangkat;
	
	return pow($angka, $pangkat);
}

//pemanggilan fungsi
$hasil = pangkat (5,4);
echo "5 pangkat 4 = $hasil";
echo "</br>";
?>