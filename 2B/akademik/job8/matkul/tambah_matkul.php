<?php
include 'koneksi.php';

$KodeMK=$_POST['KodeMK'];
$NamaMK=$_POST['NamaMK'];
$JumlahSKS=$_POST['JumlahSKS'];
$Semester=$_POST['Semester'];
$MKInti=$_POST['MKInti'];

mysqli_query($koneksi, "insert into matakuliah values('$KodeMK','$NamaMK','$JumlahSKS','$Semester','$MKInti')");

header("location:listmatkul.php");
?>