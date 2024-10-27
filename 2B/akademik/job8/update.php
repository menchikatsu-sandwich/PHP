<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM mahasiswa WHERE id = $id"));

    unlink("gambar/" . $data['gambar']);

if ($_FILES['gambar']['error'] == 0) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $gambar = basename($_FILES["gambar"]["name"]);
    
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        // Query untuk menyimpan data mahasiswa dan URL gambar ke dalam database
        mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', gambar='$gambar' where id='$id' ");

        header("location:listmahasiswa.php");
    } else {
        // Error handling jika file tidak berhasil diupload
        echo "Maaf, terjadi kesalahan saat mengupload file.";
    }
}