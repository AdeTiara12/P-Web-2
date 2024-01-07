<?php
require 'functions3.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'fauna2.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'fauna2.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data fauna</title>
</head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      body{
      	background-color: lightgreen;
      }
      h1 {
        text-transform: uppercase;
        color: grey;
      }
    button {
          background-color: grey;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input,select,textarea {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: lightgreen;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: lightgray;
    }
</style>
<body>
	<center><h1>Tambah data fauna</h1></center>

	<form action="" method="post" enctype="multipart/form-data">
		<section class="base">
			<div>
				<label for="nama">Nama Fauna : </label>
				<input type="text" name="nama" id="nama" required>
			</div>
			<div>
				<label for="asal">Asal : </label>
				<input type="text" name="asal" id="asal">
			</div>
			<div>
				<label for="jumlahpopulasi">Jumlah Populasi :</label>
				<input type="text" name="jumlahpopulasi" id="jumlahpopulasi">
			</div>
			<div>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</div>
			<div>
				<button type="submit" name="submit">Tambah Data!</button>
			</div>
		

	</form>

</body>
</html>
