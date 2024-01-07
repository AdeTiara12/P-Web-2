<!DOCTYPE html>
<html>
<head>
    <title>Modifikasi Latihan5a.php</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukan angka : 
        <input type="text" name="angka" value="<?php echo isset($_POST['angka']) ? $_POST['angka'] : ''; ?>">
        <input type="submit" name="submit" value="Tampilkan!">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['angka'];
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

</body>
</html>



