<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include './koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:login.php?pesan=login");
}else{
    header("location: login.php?pesan=gagal");
}
?>