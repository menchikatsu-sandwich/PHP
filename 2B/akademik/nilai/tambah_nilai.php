<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$jumlah_sks = $_POST['jumlah_sks'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$rata_rata = ($nilai_uts + $nilai_uas) / 2;

// Tentukan keterangan berdasarkan rata-rata
if ($rata_rata > 85) {
    $keterangan = "A";
} elseif ($rata_rata > 70 && $rata_rata <= 85) {
    $keterangan = "B";
} elseif ($rata_rata > 50 && $rata_rata <= 70) {
    $keterangan = "C";
} elseif ($rata_rata > 30 && $rata_rata <= 50) {
    $keterangan = "D";
} else {
    $keterangan = "E";
}

// Simpan ke database
$query = "INSERT INTO nilai_mahasiswa (nama, nim, semester, jumlah_sks, nilai_uts, nilai_uas, rata_rata, keterangan) VALUES ('$nama', '$nim', $semester, $jumlah_sks, $nilai_uts, $nilai_uas, $rata_rata, '$keterangan')";
mysqli_query($koneksi, $query);

header('Location: listnilai.php');
?>