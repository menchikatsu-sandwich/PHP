<?php
session_start();
include 'koneksi.php';

if (!isset($_GET['customer'])) {
    header('Location: index.php');
}

$customer = $_GET['customer'];

$query = "SELECT * FROM produk";
$result = $koneksi->query($query);

echo "<h1>Daftar Produk</h1>";
echo "<form method='post' action='keranjang.php' class='col-md-5'>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='produk-item'>";
    echo "<span class='nama-produk'>" . $row['nama_produk'] . " - " . $row['harga_jual'] . "</span>";
    echo "<input type='number' name='qty[" . $row['kode_produk'] . "]' min='0' value='0'>";
    echo "</div>";
}
echo "<input type='hidden' name='customer' value='$customer'>";
echo "<button type='submit'>Tambah ke Keranjang</button>";
echo "</form>";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/produk.css">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>