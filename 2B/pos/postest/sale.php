<?php
include 'koneksi.php';

// Ambil data pengguna dan pembeli untuk dropdown
$pengguna_result = $conn->query("SELECT id_pengguna, nama_pengguna FROM pengguna");
$pembeli_result = $conn->query("SELECT id_member, nama_member FROM pembeli");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Penjualan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Sales Penjualan</h2>
    <form action="proses_penjualan.php" method="post">
        <label for="tgl_transaksi">Date:</label>
        <input type="date" id="tgl_transaksi" name="tgl_transaksi" value="<?= date('Y-m-d') ?>" required><br><br>
        
        <label for="kasir">Kasir:</label>
        <select id="kasir" name="id_pengguna" required>
            <?php while($row = $pengguna_result->fetch_assoc()): ?>
                <option value="<?= $row['id_pengguna'] ?>"><?= $row['nama_pengguna'] ?></option>
            <?php endwhile; ?>
        </select><br><br>
        
        <label for="customer">Customer:</label>
        <select id="customer" name="id_member" required>
            <?php while($row = $pembeli_result->fetch_assoc()): ?>
                <option value="<?= $row['id_member'] ?>"><?= $row['nama_member'] ?></option>
            <?php endwhile; ?>
        </select><br><br>
        
        <label for="qty">Qty:</label>
        <input type="number" id="qty" name="qty" value="1" required>
        <button type="button" id="add">Add</button><br><br>
        
        <table id="sale_table">
            <tbody>
                <!-- Data penjualan akan ditambahkan di sini -->
            </tbody>
        </table><br><br>
        
        <label for="sub_total">Sub Total:</label>
        <input type="number" id="sub_total" name="sub_total" readonly><br><br>
        
        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount"><br><br>
        
        <label for="grand_total">Grand Total:</label>
        <input type="number" id="grand_total" name="grand_total" readonly><br><br>
        
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
    $(document).ready(function(){
        $('#add').click(function() {
            let barcode = $('#barcode').val();
            let qty = $('#qty').val();

            // Dummy data untuk contoh
            let product_name = "Product " + barcode;
            let price = 1000; // Harga dummy
            let discount = 0;
            let total = price * qty;

            let table = $('#sale_table tbody');
            let newRow = `<tr>
                <td></td>
                <td>${barcode}</td>
                <td>${product_name}</td>
                <td>${price}</td>
                <td>${qty}</td>
                <td>${discount}</td>
                <td>${total}</td>
                <td><button type="button" class="remove">Remove</button></td>
            </tr>`;

            table.append(newRow);
            updateTotals();

            $('.remove').click(function() {
                $(this).closest('tr').remove();
                updateTotals();
            });
        });

        function updateTotals() {
            let sub_total = 0;
            $('#sale_table tbody tr').each(function() {
                let total = parseFloat($(this).find('td:eq(6)').text());
                sub_total += total;
            });

            $('#sub_total').val(sub_total);
            let discount = parseFloat($('#discount').val()) || 0;
            $('#grand_total').val(sub_total - discount);
            let cash = parseFloat($('#cash').val()) || 0;
            $('#change').val(cash - (sub_total - discount));
        }

        $('#discount, #cash').on('input', updateTotals);
    });
    </script>
</body>
</html>
