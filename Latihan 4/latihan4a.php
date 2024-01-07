<?php 

$warna_balon =[ "hijau", 
                "kuning", 
                "kelabu", 
                "merah muda"];

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Array</title>
</head>
<body>
    <?php 
        echo "Balonku ada lima. <br>";

        // Menampilkan rupa - rupa warna - nya
        echo "Rupa - rupa warna - nya <br>";
        foreach ($warna_balon as $warna) {
            echo $warna . ", ";
        }
        $warna_balon[5]= "  dan biru";
        echo $warna_balon[5];
        echo "<br>";

        // Mengambil huruf dengan tanda kuning
        $huruf_kuning = array_shift($warna_balon);

        // Menampilkan balon yang meletus
        echo "Meletus balon " . $huruf_kuning . " DOR !!! <br>";

        // Menampilkan keterangan hatimu
        echo "Hatiku sangat kacau ...";
    ?>
</body>
</html>