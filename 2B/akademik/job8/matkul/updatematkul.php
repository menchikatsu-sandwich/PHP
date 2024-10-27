<?php
include 'koneksi.php';

$KodeMK=$_POST['KodeMK'];
$NamaMK=$_POST['NamaMK'];
$JumlahSKS=$_POST['JumlahSKS'];
$Semester=$_POST['Semester'];
$MKInti=$_POST['MKInti'];

mysqli_query($koneksi, "update matakuliah set NamaMK='$NamaMK', JumlahSKS='$JumlahSKS' , Semester='$Semester' , MKInti='$MKInti' where KodeMK='$KodeMK' ");

header("location:listmatkul.php");
?>