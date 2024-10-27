<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM karyawan WHERE id=$id";
mysqli_query($koneksi, $query);
header('Location: listgaji.php');
?>