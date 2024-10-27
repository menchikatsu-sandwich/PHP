<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id_member'])) {
    header("Location: login.php");
    exit();
}

$produk_ids = $_POST['produk'];
$quantities = $_POST['qty'];
$produk_list = [];

foreach ($produk_ids as $id) {
    $sql = "SELECT * FROM produk WHERE kode_produk='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $row['qty'] = $quantities[$id];
        $row['total'] = $row['harga_jual'] * $quantities[$id];
        $produk_list[] = $row;
    }
}

$_SESSION['produk_list'] = $produk_list;
header("Location: kasir.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout</h2>
</body>
</html>
