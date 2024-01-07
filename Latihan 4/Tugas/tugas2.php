<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Flora dan Fauna Terancam Punah</title>
</head>
<body>
<?php
// Membuat associative array dengan data flora dan fauna terancam punah
$FloradanFaunaTerancam = array(
    array(
        "ID" => "001",
        "Nama" => "KOMODO",
        "Asal" => "NTT",
        "Jumlah Populasi" => "3303",
        "Gambar" => "komodo.JPEG"  
    ),
    array(
        "ID" => "002",
        "Nama" => "MACAN TUTUL JAWA",
        "Asal" => "Pulau Jawa",
        "Jumlah Populasi" => "48-52",
        "Gambar" => "macan.JPEG" 
    ),
    array(
        "ID" => "003",
        "Nama" => "DUGONG",
        "Asal" => "Pulau Bintan",
        "Jumlah Populasi" => "1000",
        "Gambar" => "dugong.JPEG"
    ),
    array(
        "ID" => "004",
        "Nama" => "HARIMAU SUMATERA",
        "Asal" => "Pulau Sumatera",
        "Jumlah Populasi" => "500-600",
        "Gambar" => "harimau.JPEG" 
    ),
    array(
        "ID" => "005",
        "Nama" => "BURUNG MERAK",
        "Asal" => "Pulau Jawa",
        "Jumlah Populasi" => "10000",
        "Gambar" => "burung.JPEG" 
    ),
    array(
        "ID" => "006",
        "Nama" => "RAFFLESIA ARNILDII",
        "Asal" => "Bengkulu Selatan",
        "Jumlah Populasi" => "60",
        "Gambar" => "rafflesia.JPEG" 
    ),
    array(
        "ID" => "007",
        "Nama" => "EDELWEISS JAWA",
        "Asal" => "Pulau Jawa",
        "Jumlah Populasi" => "15572" ,
        "Gambar" => "edelwais.JPEG"
    ),
    array(
        "ID" => "008",
        "Nama" => "KANTONG SEMAR",
        "Asal" => "Pulau Kalimantan dan Sematera",
        "Jumlah Populasi" => "358",
        "Gambar" => "kantong.JPEG"
    ),
     array(
        "ID" => "009",
        "Nama" => "POHON DAMAR",
        "Asal" => "Papua",
        "Jumlah Populasi" => "30",
        "Gambar" => "pohon.JPEG"
    ),
      array(
        "ID" => "010",
        "Nama" => "ANGGREK HITAM",
        "Asal" => "Semenanjung Malaya",
        "Jumlah Populasi" => "37,22",
        "Gambar" => "pohon.JPEG"
    ),
);


?>


<h1 style="text-align: center;"> Flora dan Fauna Terancam Punah</h1>
<table border="1" cellpadding="3" cellspacing="0" style=" margin: 0 auto;">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Jumlah Populasi</th>
        <th>Gambar</th>
    </tr>

   <?php 
    foreach ($FloradanFaunaTerancam as $punah) {
        echo "<tr>";
        echo "<td>".$punah["ID"]."</td>";
        echo "<td>".$punah["Nama"] . "</td>";
        echo "<td>".$punah["Asal"] . "</td>";
        echo "<td>".$punah["Jumlah Populasi"] . "</td>";
        echo "<td><img src=img/" . $punah["Gambar"].">"; 
        echo "</tr>";
    };
?>
</table>
</body>
</html>