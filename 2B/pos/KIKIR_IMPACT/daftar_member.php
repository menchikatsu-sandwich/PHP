<html>
    <head>
        <title>Toko Bahagia</title>
    </head>
</html>
<?php
include 'koneksi.php';


if (isset($_POST['daftar'])) {
    
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "INSERT INTO pembeli (id_member, nama_member, nik, alamat, noHP) VALUES (NULL, '$nama', '$nik', '$alamat', '$noHP')";
    $koneksi->query($query);

    header('Location: keranjang.php?customer='.$nama);
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/member.css">
<style class="col-md-6">
    body {
        background-image: url('css/Screenshot 2024-07-17 120621.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<form method="post" action="" class="col-md-3">
    Nama: <input type="text" name="nama" required><br>
    NIK: <input type="text" name="nik" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    No HP: <input type="text" name="noHP" required><br>
    <button type="submit" name="daftar">Daftar</button>
</form>
