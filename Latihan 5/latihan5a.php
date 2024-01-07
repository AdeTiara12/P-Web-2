<?php
if (isset($_GET['angka'])) {
    $jumlah = $_GET['angka'];
    $baris = $jumlah;

    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $jumlah; $j++) {
            echo $j . " ";
        }
        echo "<br>";
        $jumlah--;
    }
}
?>

