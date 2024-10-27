<?php
$nama = $_GET['name'];
$alamat = $_GET['alamat'];
$jabatan = $_GET['jabatan'];
$gajipokok = $_GET['gajipokok'];
$jumhari = $_GET['jumhari'];

$UM = 0;
$TJ = 0;

switch ($jabatan) {
    case 'Manager':
        $UM = $jumhari * 50000;
        $TJ = 1500000;
        break;
    case 'Supervisor':
        $UM = $jumhari * 30000;
        $TJ = 500000;
        break;
    case 'Staf':
        $UM = $jumhari * 25000;
        $TJ = 150000;
        break;
}

$totalGaji = $UM + $TJ + $gajipokok;

echo "Nama : $nama <br>";
echo "Alamat: $alamat <br>";
echo "Jabatan : $jabatan <br>";
echo "Gaji Pokok : $gajipokok <br>";
echo "Jumlah Hari Kerja : $jumhari <br>";
echo "Uang Makan = $jumhari X " . ($UM / $jumhari) . " = $UM <br>";
echo "Tunjangan Jabatan = $TJ <br>";
echo "Total Gaji = $UM + $TJ + $gajipokok = $totalGaji";
?>