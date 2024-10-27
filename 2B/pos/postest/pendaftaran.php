<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_member = $_POST['nama_member'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO pembeli (nama_member, nik, alamat, noHP, username, password) VALUES ('$nama_member', '$nik', '$alamat', '$noHP', '$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Member</title>
</head>
<body>
    <h2>Pendaftaran Member</h2> 
    <form method="post">
        Nama: <input type="text" name="nama_member" required><br>
        NIK: <input type="text" name="nik" required><br>
        Alamat: <input type="text" name="alamat" required><br>
        No HP: <input type="text" name="noHP" required><br>
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
