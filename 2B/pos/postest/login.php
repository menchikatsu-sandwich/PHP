<?php
session_start();
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM pembeli WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['id_member'] = $row['id_member'];
            $_SESSION['nama_member'] = $row['nama_member'];
            header("Location: produk.php");
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Member</title>
</head>
<body>
    <h2>Login Member</h2>
    <form method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
