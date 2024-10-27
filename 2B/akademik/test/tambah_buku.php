<?php
include 'koneksi.php';

$JudulReferensi=$_POST['JudulReferensi'];
$JenisReferensi=$_POST['JenisReferensi'];
$JumlahHalaman=$_POST['JumlahHalaman'];
$NoISBN=$_POST['NoISBN'];

mysqli_query($koneksi, "insert into bukureferensi values('','$JudulReferensi','$JenisReferensi','$JumlahHalaman','$NoISBN')");

header("location:listbuku.php");
?>