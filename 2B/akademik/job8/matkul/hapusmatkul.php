<?php
include 'koneksi.php';

$id = $_GET['KodeMK'];
mysqli_query($koneksi,"delete from matakuliah where KodeMK='$id'");
header("location:listmatkul.php");
?>