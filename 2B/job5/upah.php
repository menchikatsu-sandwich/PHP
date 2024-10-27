<?php

// Mendeklarasikan upah per jam berdasarkan golongan secara sederhana
$upahA = 4000;
$upahB = 5000;
$upahC = 6000;
$upahD = 7000;

// Mendeklarasikan upah lembur per jam
$upahLembur = 3000;

// Menerima input dari form HTML
$namaPekerja = $_POST['namaPekerja'];
$golongan = $_POST['golongan'];
$jamKerja = (int)$_POST['jamKerja'];

// Menentukan upah per jam berdasarkan golongan
if ($golongan == "A") {
    $upahPerJam = $upahA;
} elseif ($golongan == "B") {
    $upahPerJam = $upahB;
} elseif ($golongan == "C") {
    $upahPerJam = $upahC;
} elseif ($golongan == "D") {
    $upahPerJam = $upahD;
} else {
    echo "Golongan karyawan tidak valid.\n";
    exit;
}

// Menghitung upah mingguan dan total upah lembur
if ($jamKerja <= 48) {
    $upahMingguan = $jamKerja * $upahPerJam;
    $totalUpahLembur = 0;
} else {
    $jamLembur = $jamKerja - 48;
    $totalUpahLembur = $jamLembur * $upahLembur;
    $upahMingguan = (48 * $upahPerJam) + $totalUpahLembur;
}

// Menampilkan hasil
echo "Nama Pekerja: " . $namaPekerja . "<br>";
echo "Golongan Pekerja: " . $golongan . "<br>";
echo "Jam Kerja: " . $jamKerja . "<br>";
echo "Upah Perjam: Rp. " . $upahPerJam . "<br>";
echo "Upah Lembur Perjam: Rp. " . $upahLembur . "<br>";
echo "Total Upah Lembur: Rp. " . $totalUpahLembur . "<br>";
echo "Upah mingguan karyawan adalah: Rp. " . $upahMingguan . "<br>";

?>
