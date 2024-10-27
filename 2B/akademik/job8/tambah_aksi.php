<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

if ($_FILES['gambar']['error'] == 0) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $gambar = basename($_FILES["gambar"]["name"]);  // Simpan sebagai URL relatif

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        // Query untuk menyimpan data mahasiswa dan URL gambar ke dalam database
        $query = "INSERT INTO mahasiswa (nama, nim, alamat, gambar) VALUES ('$nama', '$nim', '$alamat', '$gambar')";
        mysqli_query($koneksi, $query);

        header("location:listmahasiswa.php");
    } else {
        // Error handling jika file tidak berhasil diupload
        echo "Maaf, terjadi kesalahan saat mengupload file.";
    }
}
?>