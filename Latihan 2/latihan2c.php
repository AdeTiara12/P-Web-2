<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - latihan 1</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            display: inline-block;
            margin-top: 5px;
            margin-left: 4px;
            text-align: center;
            line-height: 50px;
            border: 2px solid black;
        }
        .clear {
            clear: both;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    $jumlah_baris = 5;

    for ($i = 1; $i <= $jumlah_baris; $i++) {
        $class = ($i % 2 == 0 ? 'genap' : 'ganjil');
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class="kotak ' . $class . '">' . $j . '</div>';
        }
        echo '<div class="clear"></div>';
    }
    ?>
</body>
</html>