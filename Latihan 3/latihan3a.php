<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3a</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bolder;
        }
    </style>
</head>
<body>

<?php
function ganti_style($tulisan, $kelas) {
    return "<span class='$kelas'>$tulisan</span>";
}

$tulisan = "Hello world! Here I come!";
$kelas = "ganti-style";
echo ganti_style($tulisan, $kelas);
?>

</body>
</html>