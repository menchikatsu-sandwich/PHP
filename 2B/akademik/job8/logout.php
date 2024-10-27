<?php
// Memulai sesi
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Jika tombol logout ditekan, hapus semua data sesi dan redirect ke halaman login
if (isset($_POST['logout'])) {
    session_destroy(); // Hapus semua data sesi
    header("Location: login.php"); // Redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h2>Selamat Tinggal,<?php echo $_SESSION['username']; ?></h2>
    <form method="post" action="">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>