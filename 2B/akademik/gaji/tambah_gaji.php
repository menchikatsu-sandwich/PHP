<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jabatan = $_POST['jabatan'];
$hari_kerja = $_POST['hari_kerja'];

// Tentukan gaji pokok berdasarkan jabatan
switch ($jabatan) {
    case 'staff':
        $gaji_pokok = 100000;
        break;
    case 'manager':
        $gaji_pokok = 150000;
        break;
    case 'supervisor':
        $gaji_pokok = 200000;
        break;
}

// Hitung gaji bersih
$gaji_bersih = $gaji_pokok * $hari_kerja;

// Simpan ke database
$query = "INSERT INTO karyawan (nama, umur, jabatan, gaji_pokok, hari_kerja, gaji_bersih) VALUES ('$nama', $umur, '$jabatan', $gaji_pokok, $hari_kerja, $gaji_bersih)";
mysqli_query($koneksi, $query);

header('Location: listgaji.php');
?>