<?php
include'koneksi.php';

$id=$_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM mahasiswa WHERE id = $id"));

    unlink("gambar/" . $data['gambar']);

mysqli_query($koneksi,"delete from mahasiswa where id='$id' ");

header("location:listmahasiswa.php");
?>


