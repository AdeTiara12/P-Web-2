<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php

    echo "Pengulangan untuk mencari kategori bilangan : ";
        for($i=1;$i<=20;$i++){
            if ($i %2 == 0){
            echo "<li>$i adalah bilangan genap";
        } else {
            echo "<li>$i adalah bilangan ganjil";
        }
        $a=0;
    for($j=1;$j<=$i;$j++){
        if($i % $j == 0){
            $a++;
        }
    }
        if($a == 2){
        echo "sekaligus bilangan prima";
        }
    }
?>
</body>
</html>