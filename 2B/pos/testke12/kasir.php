<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kasir.css">
</head>
<body>
<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'kasir') {
    header('Location: login.php');
}

$keranjang = $_SESSION['keranjang'];
$customer = $_SESSION['customer'];
$Totalbelanja = 0;
$tgl_transaksi = date('Y-m-d');
$kasir = $_SESSION['username'];

// Mengambil nama kasir dari database
$query_kasir = "SELECT nama_pengguna FROM pengguna WHERE user_name='$kasir'";
$kasirjadi = $koneksi->query($query_kasir);
$kasir_info = $kasirjadi->fetch_assoc();
$nama_kasir = $kasir_info['nama_pengguna'];

echo "<h1>Detail Transaksi</h1>";
echo "<p>Tanggal: $tgl_transaksi<br></p>";
echo "<p>Kasir: $nama_kasir<br></p>";
echo "<p>Customer: $customer<br></p>";

echo "<table border='1'>";
echo "<tr><th>Kode Produk</th><th>Nama Produk</th><th>Harga Satuan</th><th>Qty</th><th>Subtotal</th></tr>";

foreach ($keranjang as $kode_produk => $qty) {
    if ($qty > 0) {
        $query = "SELECT * FROM produk WHERE kode_produk='$kode_produk'";
        $result = $koneksi->query($query);
        $produk = $result->fetch_assoc();

        $subtotal = $produk['harga_jual'] * $qty;
        $Totalbelanja += $subtotal;

        echo "<tr>";
        echo "<td>" . $kode_produk . "</td>";
        echo "<td>" . $produk['nama_produk'] . "</td>";
        echo "<td>" . $produk['harga_jual'] . "</td>";
        echo "<td>" . $qty . "</td>";
        echo "<td>" . $subtotal . "</td>";
        echo "</tr>";
    }
}

$discount = ($customer != 'umum') ? 0.1 * $Totalbelanja : 0;
$Totalbelanja -= $discount;

echo "</table>";
echo "<h2>Sub Total: " . ($Totalbelanja + $discount) . "</h2>";
echo "<h2>Discount: " . $discount . "</h2>";
echo "<h2>Total Semua: " . $Totalbelanja . "</h2>";

echo "<form method='post' action='pembayaran_aksi.php'>";
echo "<label>Cash: </label><input type='number' name='bayar' required><br>";
echo "<input type='hidden' name='Totalbelanja' value='$Totalbelanja'>";
echo "<button type='submit'>Proses Pembayaran</button>";
echo "</form>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>