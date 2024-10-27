<?php
include 'koneksi.php';

$tgl_transaksi = $_POST['tgl_transaksi'];
$id_pengguna = $_POST['id_pengguna'];
$id_member = $_POST['id_member'];
$sub_total = $_POST['sub_total'];
$discount = $_POST['discount'];
$grand_total = $_POST['grand_total'];
$cash = $_POST['cash'];
$change = $_POST['change'];
$note = $_POST['note'];

// Insert data ke tabel membeli
$sql_membeli = "INSERT INTO membeli (tgl_transaksi, id_pengguna, id_member) VALUES ('$tgl_transaksi', '$id_pengguna', '$id_member')";
$conn->query($sql_membeli);
$id_transaksi = $conn->insert_id;

// Insert data ke tabel beli_detail
foreach ($_POST['products'] as $product) {
    $kode_produk = $product['barcode'];
    $qty = $product['qty'];
    $harga_jual = $product['price'];
    $total_harga = $product['total'];
    
    $sql_beli_detail = "INSERT INTO beli_detail (id_transaksi, kode_produk, harga_jual, total_harga) VALUES ('$id_transaksi', '$kode_produk', '$harga_jual', '$total_harga')";
    $conn->query($sql_beli_detail);
}

echo "Transaksi berhasil diproses!";
$conn->close();
?>
