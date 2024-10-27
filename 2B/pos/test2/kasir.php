<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id_pengguna'])) {
    header("Location: login.php");
    exit();
}

$products = isset($_POST['products']) ? $_POST['products'] : [];
$qty = isset($_POST['qty']) ? $_POST['qty'] : [];

$produk_list = [];
foreach ($products as $kode_produk) {
    $sql = "SELECT * FROM produk WHERE kode_produk='$kode_produk'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $row['qty'] = $qty[$kode_produk];
        $produk_list[] = $row;
    }
}

$id_member = $_SESSION['id_member'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>
</head>
<body>
    <h2>Penjualan</h2>
    <form action="proses_checkout.php" method="post">
        <label for="tgl_transaksi">Date:</label>
        <input type="date" id="tgl_transaksi" name="tgl_transaksi" value="<?= date('Y-m-d') ?>" required><br><br>
        
        <label for="kasir">Kasir:</label>
        <input type="text" id="kasir" name="nama_pengguna" value="<?= $_SESSION['nama_pengguna'] ?>" readonly><br><br>
        
        <label for="customer">Customer:</label>
        <input type="text" id="customer" name="id_member" value="<?= $id_member ?>" readonly><br><br>
        
        <table>
            <thead>
                <tr>
                    <th>Barcode</th>
                    <th>Product Item</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sub_total = 0;
                foreach ($produk_list as $produk):
                    $total = $produk['harga_jual'] * $produk['qty'];
                    $sub_total += $total;
                ?>
                <tr>
                    <td><?= $produk['kode_produk'] ?></td>
                    <td><?= $produk['nama_produk'] ?></td>
                    <td><?= $produk['harga_jual'] ?></td>
                    <td><?= $produk['qty'] ?></td>
                    <td><?= $total ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table><br><br>
        
        <label for="sub_total">Sub Total:</label>
        <input type="number" id="sub_total" name="sub_total" value="<?= $sub_total ?>" readonly><br><br>
        
        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" value="0"><br><br>
        
        <label for="grand_total">Grand Total:</label>
        <input type="number" id="grand_total" name="grand_total" value="<?= $sub_total ?>" readonly><br><br>
        
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" required><br><br>
        
        <label for="change">Change:</label>
        <input type="number" id="change" name="change" readonly><br><br>
        
        <label for="note">Note:</label>
        <input type="text" id="note" name="note"><br><br>
        
        <button type="submit">Process Payment</button>
        <button type="reset">Cancel</button>
    </form>

    <script>
    document.getElementById('discount').addEventListener('input', updateTotals);
    document.getElementById('cash').addEventListener('input', updateTotals);

    function updateTotals() {
        const subTotal = parseFloat(document.getElementById('sub_total').value);
        const discount = parseFloat(document.getElementById('discount').value) || 0;
        const grandTotal = subTotal - discount;
        document.getElementById('grand_total').value = grandTotal;

        const cash = parseFloat(document.getElementById('cash').value) || 0;
        const change = cash - grandTotal;
        document.getElementById('change').value = change;
    }
    </script>
</body>
</html>
