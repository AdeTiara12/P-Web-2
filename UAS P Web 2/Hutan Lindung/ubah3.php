<?php
require 'functions3.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$fn = query("SELECT * FROM fauna WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'fauna2.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'fauna2.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah datafauna</title>
</head>
<style type="text/css">
      * {
        font-family: "fnebuchet MS";
      }
      h1 {
        text-fnansform: uppercase;
        color: lightgreen;
      }
    button {
          background-color: lightgreen;
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
	<center><h1>Ubah data fauna</h1></center>

	<form action="" method="post" enctype="multipart/form-data">
		<section class="base">
		<input type="hidden" name="id" value="<?= $fn["id"]; ?>">
		
			<div>
				<label for="nama">Nama Fauna : </label>
				<input type="text" name="nama" id="nama" required value="<?= $fn["nama"]; ?>">
			</div>
			<div>
				<label for="asal">Asal : </label>
				<input type="text" name="asal" id="asal" value="<?= $fn["asal"]; ?>">
			</div>
			<div>
				<label for="jumlahpopulasi">Jumlah Populasi :</label>
				<input type="text" name="jumlahpopulasi" id="jumlahpopulasi" value="<?= $fn["jumlahpopulasi"]; ?>">
			</div>
		<div>
		<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $fn['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</div>
			<div>
				<button type="submit" name="submit">Ubah Data!</button>
			</div>

	</form>




</body>
</html>
