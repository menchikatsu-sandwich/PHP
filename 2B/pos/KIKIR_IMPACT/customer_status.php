<html>
    <head>
        <title>Toko Bahagia</title>
    </head>
</html>
<?php
session_start();
include 'koneksi.php';
$_SESSION['keranjang'] = $_POST['qty'];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/simplebox.css">
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
        <h2>Status Pelanggan</h2>
                <div class="inputBox">
                    <a href="keranjang.php?customer=umum">Belanja sebagai Umum</a><br>
                </div>
                <br>
                <div class="inputBox">
                    <a href="daftar_member.php">Belanja sebagai Member</a>
                </div> 
    </div>
</div>

