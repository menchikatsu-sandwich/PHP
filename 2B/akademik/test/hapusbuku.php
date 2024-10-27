<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi,"delete from bukureferensi where KodeReferensi='$id'");
header("location:listbuku.php");
?>