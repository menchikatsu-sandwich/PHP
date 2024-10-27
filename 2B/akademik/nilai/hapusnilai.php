<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM nilai_mahasiswa WHERE id=$id";
mysqli_query($koneksi, $query);
header('Location: listnilai.php');
?>