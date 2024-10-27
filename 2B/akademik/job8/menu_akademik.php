<!doctype html>
<html lang="en">
<head>
    <title>Menu Akademik</title>
</head>
<body>
    <?php
    session_start();
    $username = $_SESSION['username'];
    $status = $_SESSION['status'];
    echo "<h2>Selamat Datang, $username, anda berhasil login</h2>";
    echo "Menu Utama <br><br>";
    echo "<a href='listmahasiswa.php'>Data Mahasiswa</a><br><br>";
    echo "<a href='listdosen.php'>Data Dosen</a><br><br>";
    ?>
    <a href="listmahasiswa"></a>

    <form method="post" action="logout.php">
        <input type="submit" name="tbsubmit" value="LOGOUT">
    </form>
</body>
</html>