<?php
include 'koneksi.php';

$nama_member = $_POST['nama_member'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$noHP = $_POST['noHP'];

$sql = "INSERT INTO pembeli (nama_member, nik, alamat, noHP) VALUES ('$nama_member', '$nik', '$alamat', '$noHP')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
    header("Location: login_pembeli.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
