<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_fauna.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Nama Fauna', 'Asal', 'Jumlah Populasi','Gambar'));

// Ambil data fauna dari database
$data = mysqli_query($koneksi, "SELECT * FROM fauna");

// Tulis data fauna ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['nama'],
        $d['asal'],
        $d['jumlahpopulasi'],
        $d['gambar']
    ));
}

// Tutup file CSV
fclose($output);
?>
