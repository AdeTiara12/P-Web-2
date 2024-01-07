<?php 
// $_GET

$mahasiswa = [
    [ 
        "nim" => "701220035",
        "nama" => "Ade Tiara",
        "email" => "adet90068@gmail.com",
        "jurusan" => "Kriminologi",
        "gambar" => "ade.JPG"
    ],
    [
       "nim" => "701220083",
        "nama" => "Sadiya Zafira",
        "email" => "sadiyazafira04@gmail.com",
        "jurusan" => "Radiologi",
        "gambar" => "sadiya.JPG"
    ],
    [
        "nim" => "701220141",
        "nama" => "Shinta Novira Balqis",
        "email" => "shintanb@gmail.com",
        "jurusan" => "Kedokteran",
        "gambar" => "tata.JPG"
    ]

];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title>Daftar Mahasiswa</title>
    <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
*{
margin: 0;
padding: 0;
}

body{
background: white;
text-align: center;
}

section{
margin: 100px auto;
}

section img{
border-radius: 100%;
border: 5px solid black;
}
</style>
</head>

 <body>

 <h1>Daftar Mahasiswa</h1>  
 
 <ul>
 <?php foreach($mahasiswa as $mhs ) :  ?>

    <br>
    <section><img src="img/<?= $mhs["gambar"]; ?>">
    </section></br>
    <br>
        <a href="latihan5c.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></br></a>
    <br>email <?= $mhs["email"]; ?></br>

    
<?php endforeach; ?>

</ul>



 </body>
</html>