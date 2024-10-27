<?php
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>