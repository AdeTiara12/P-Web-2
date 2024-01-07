
<style type="text/css">
	.soal {
		font-size: 20px;
		font-style: italic;
	}
</style>
<?php 

$jawabanIsset = "Isset adalah = . . . . . . . . <br><br>";
$jawabanempty = "Empty adalah = . . . . . . .  . ";
$style = "soal";


function soal($style){
return "<spann class = '$style'</span>";
}

echo soal($style,$jawabanIsset,$jawabanempty);
echo "$jawabanIsset $jawabanempty";

 ?>