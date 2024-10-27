<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM pengguna WHERE user_name='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['id_pengguna'] = $row['id_pengguna'];
    $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
    header("Location: kasir.php");
} else {
    echo "Username atau password salah";
}

$conn->close();
?>
