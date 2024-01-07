<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}

require 'functions2.php';
$flora = query("SELECT * FROM flora");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $flora = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Flora</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!-- Tambahkan link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>


<center>

    <h1>Daftar Flora</h1>
    <br>
    <table border="1" cellpadding="10" width="100%">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama Flora</th>
            <th>Asal</th>
            <th>Jumlah Populasi</th>
            <th>Gambar</th>  
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $flora as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['asal']; ?></td>
            <td><?php echo $row['jumlahpopulasi']; ?></td>
            <td><center><img src="img/<?= $row["gambar"]; ?>" width="100"></center></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</center>
<script>
    window.print();
</script>
</body>
</html>
