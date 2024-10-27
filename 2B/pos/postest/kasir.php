<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['produk_list'])) {
    header("Location: produk.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tgl_transaksi = date('Y-m-d');
    $id_pengguna = $_POST['id_pengguna'];
    $id_member = $_SESSION['id_member'];
    $sub_total = $_POST['sub_total'];
    $discount = $_POST['discount'];
    $grand_total = $_POST['grand_total'];
    $cash = $_POST['cash'];
    $change = $_POST['change'];
    $note = $_POST['note'];

    $sql_membeli = "INSERT INTO membeli (tgl_transaksi, id_pengguna, id_member) VALUES ('$tgl_transaksi', '$id_pengguna', '$id_member')";
    if ($conn->query($sql_membeli) === TRUE) {
        $id_transaksi = $conn->insert_id;
        foreach ($_SESSION['produk_list'] as $product) {
            $kode_produk = $product['kode_produk'];
            $harga_jual = $product['harga_jual'];
            $total_harga = $product['total'];

            $sql_beli_detail = "INSERT INTO beli_detail (id_transaksi, kode_produk, harga_jual, total_harga) VALUES ('$id_transaksi', '$kode_produk', '$harga_jual', '$total_harga')";
            $conn->query($sql_beli_detail);
        }
        unset($_SESSION['produk_list']);
        echo "Transaksi berhasil diproses!";
    } else {
        echo "Error: " . $sql_membeli . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Kasir</h2>
    <form method="post">
        Tanggal: <input type="date" name="tgl_transaksi" value="<?= date('Y-m-d') ?>" readonly><br>
        Kasir: <select name="id_pengguna" required>
            <?php
            $pengguna_result = $conn->query("SELECT * FROM pengguna");
            while($row = $pengguna_result->fetch_assoc()):
            ?>
                <option value="<?= $row['id_pengguna'] ?>"><?= $row['nama_pengguna'] ?></option>
            <?php endwhile; ?>
        </select><br>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $sub_total = 0; foreach ($_SESSION['produk_list'] as $index => $product): $sub_total += $product['total']; ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $product['kode_produk'] ?></td>
                    <td><?= $product['nama_produk'] ?></td>
                    <td><?= $product['harga_jual'] ?></td>
                    <td><?= $product['qty'] ?></td>
                    <td><?= $product['total'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        Sub Total: <input type="number" name="sub_total" value="<?= $sub_total ?>" readonly><br>
        Discount: <input type="number" name="discount" value="0"><br>
        Grand Total: <input type="number" name="grand_total" value="<?= $sub_total ?>" readonly><br>
        Cash: <input type="number" name="cash" required><br>
        Change: <input type="number" name="change" value="0" readonly><br>
        Note: <input type="text" name="note"><br>
        <button type="submit">Process Payment</button>
    </form>

    <script>
    document.querySelector('[name="discount"]').addEventListener('input', function() {
        let sub_total = parseFloat(document.querySelector('[name="sub_total"]').value);
        let discount = parseFloat(this.value);
        document.querySelector('[name="grand_total"]').value = sub_total - discount;
    });

    document.querySelector('[name="cash"]').addEventListener('input', function() {
        let grand_total = parseFloat(document.querySelector('[name="grand_total"]').value);
        let cash = parseFloat(this.value);
        document.querySelector('[name="change"]').value = cash - grand_total;
    });
    </script>
</body>
</html>
