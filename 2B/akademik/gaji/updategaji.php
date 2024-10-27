<?php
include 'koneksi.php';

$id = $_POST['id'];
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

// Update data ke database
$query = "UPDATE karyawan SET nama='$nama', umur=$umur, jabatan='$jabatan', gaji_pokok=$gaji_pokok, hari_kerja=$hari_kerja, gaji_bersih=$gaji_bersih WHERE id=$id";
mysqli_query($koneksi, $query);

header('Location: listgaji.php');
?>