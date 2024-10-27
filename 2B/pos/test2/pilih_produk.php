<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['id_member'])) {
    $_SESSION['id_member'] = 0; // Untuk pembeli umum
}

$produk_result = $conn->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pilih Produk</title>
</head>
<body>
    <h2>Pilih Produk</h2>
    <form action="kasir.php" method="post">
        <table>
            <tr>
                <th>Pilih</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga Jual</th>
                <th>Qty</th>
            </tr>
            <?php while ($row = $produk_result->fetch_assoc()): ?>
            <tr>
                <td><input type="checkbox" name="products[]" value="<?= $row['kode_produk'] ?>"></td>
                <td><?= $row['kode_produk'] ?></td>
                <td><?= $row['nama_produk'] ?></td>
                <td><?= $row['harga_jual'] ?></td>
                <td><input type="number" name="qty[<?= $row['kode_produk'] ?>]" value="1"></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <button type="submit">Checkout</button>
    </form>
</body>
</html>
