<?php
include 'koneksi.php';

$id=$_POST['id'];
$JudulReferensi=$_POST['JudulReferensi'];
$JenisReferensi=$_POST['JenisReferensi'];
$JumlahHalaman=$_POST['JumlahHalaman'];
$NoISBN=$_POST['NoISBN'];

mysqli_query($koneksi, "update bukureferensi set JudulReferensi='$JudulReferensi', JenisReferensi='$JenisReferensi', JumlahHalaman='$JumlahHalaman', NoISBN='$NoISBN' where KodeReferensi='$id' ");

header("location:listbuku.php");
?>