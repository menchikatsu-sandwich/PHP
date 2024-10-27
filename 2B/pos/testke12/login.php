<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM pengguna WHERE user_name='$username' AND password='$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'kasir';
        header('Location: kasir.php');
    } else {
        echo "Username atau password salah!";
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css">
<style class="col-md-8">
    body {
        background-image: url('css/Screenshot 2024-07-17 120621.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="card" class="col-md-5">
    <div class="bungkus-content">
        <h2>Sign In</h2>
        <form method="post" action="">
            <div class="form">
                <div class="inputBox">
                    <input type="text" name="username" required>
                    <i>Username</i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required>
                    <i>Password</i>
                </div>
                <div class="inputBox">
                    <input type="submit" name="login" value="Masuk">
                </div>
            </div>
        </form>
    </div>
</div>