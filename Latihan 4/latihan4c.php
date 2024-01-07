<?php 
$negara = [
        "Indonesia" => "D.K.I.Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Flipina" => "Manila",
        "Myanmar" => "Naypyidaw"];


     ?>
     <!DOCTYPE html>
     <html>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan 4c Array Associative</title>
     </head>
     <body>
     </body>
            <?php 
            echo "Daftar Negara ASEAN dan Ibukota : </br> </br>";
            foreach ($negara as $nama_negara => $ibukota ) : ?>
                <li><?php echo "$nama_negara : $ibukota" ?></li>
            <?php endforeach ?>
     
     </body>
</html>