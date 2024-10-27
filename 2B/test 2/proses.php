<!-- kode -->
<?php echo "Kode Karyawan: " . $_POST['kode']; ?><br>
<!-- nama -->
<?php echo "Nama Karyawan: " . $_POST['nama']; ?><br>
<!-- gaji pokok -->
<?php echo "Gaji Pokok: " . $_POST['gaji']; ?><br>
<!-- jabatan -->
<?php echo "Jabatan: ". $_POST['jabatan']; ?><br>
<!-- hari -->
<?php echo "Jumlah hari kerja dalam sebulan: ". $_POST['hari']; ?><br>
<!-- masa -->
<?php echo "Masa Kerja: ". $_POST['masa']; ?><br>
<!-- fungsi -->
<?php 
$jabatan = $_POST['jabatan'];
$hari = $_POST['hari'];
$masa = $_POST['masa'];
$gaji = $_POST['gaji'];
// fungsi uang makan
function fuangmakan ($jabatan, $hari) {
    $uangmakan = 0;
    switch ($jabatan) {
        case 'Manajer':
            $uangmakan = $hari*50000;
            break;
        case 'Supervisor':
            $uangmakan = $hari*30000;
            break;
        case 'Staff':
            $uangmakan = $hari*20000;
            break;
    }
    return $uangmakan;
}
// fungsi tunjangan jabatan
function ftunjanganJabatan ($jabatan) {
    $tunjanganJ = 0;
    switch ($jabatan) {
        case 'Manajer':
            $tunjanganJ = 1000000;
            break;
        case 'Supervisor':
            $tunjanganJ = 300000;
            break;
        case 'Staff':
            $tunjanganJ = 200000;
            break;
    }
    return $tunjanganJ;
}
// fungsi tunjangan khusus
function ftunjanganKhusus ($jabatan, $masa) {
    $tunjanganK = 0;
    switch ($jabatan) {
        case 'Manajer':
            $klp = ($masa - ($masa % 5)) / 5;
            $tunjanganK = $klp * 1000000;
            break;
        case 'Supervisor':
            $klp = ($masa - ($masa % 5)) / 5;
            $tunjanganK = $klp * 500000;
            break;
        case 'Staff':
            $klp = ($masa - ($masa % 5)) / 5;
            $tunjanganK = $klp * 200000;
            break;
    }
    return $tunjanganK;
}
?>
<!-- menampilkan -->
<?php
    $UMakan = fuangmakan($jabatan, $hari);
    $TunJ = ftunjanganJabatan($jabatan);
    $TunK = ftunjanganKhusus($jabatan, $masa);
    $TotalGaji = $gaji + $UMakan + $TunJ + $TunK;
    echo "Uang makan : Rp $UMakan<br>";
    echo "Tunjangan Jabatan : Rp $TunJ<br><br>";
    echo "Tunjangan Khusus : Rp $TunK<br>";
    echo "<H2>Total Gaji : Rp $TotalGaji</H2><br>";
?>
