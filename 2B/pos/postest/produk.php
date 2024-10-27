<?php
session_start();
include 'koneksi.php';

$produk_result = $conn->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemilihan Produk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Pemilihan Produk</h2>
    <form action="checkout.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Satuan</th>
                    <th>Harga Jual</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $produk_result->fetch_assoc()): ?>
                <tr>
                    <td><input type="checkbox" name="produk[]" value="<?= $row['kode_produk'] ?>"></td>
                    <td><?= $row['kode_produk'] ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><?= $row['satuan'] ?></td>
                    <td><?= $row['harga_jual'] ?></td>
                    <td><input type="number" name="qty[<?= $row['kode_produk'] ?>]" value="1"></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <button type="submit">Checkout</button>
    </form>
</body>
</html>
