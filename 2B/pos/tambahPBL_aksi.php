<?php
include 'koneksi.php';

$nama_member = $_POST['nama_member'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

// Simpan ke database
$query = "INSERT INTO pembeli (nama_member, nik, alamat, nohp) VALUES ('$nama_member', '$nik', '$alamat', '$nohp')";
mysqli_query($koneksi, $query);

header('Location: listpembeli.php');
?>