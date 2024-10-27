<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recipe.css">
</head>
<body>
    <div class="container">

        <?php
        session_start();
        include 'koneksi.php';

        if (!isset($_SESSION['username']) || $_SESSION['role'] != 'kasir') {
            header('Location: login.php');
            exit;
        }

        $bayar = $_POST['bayar'];
        $Totalbelanja = $_POST['Totalbelanja'];
        $kembalian = $bayar - $Totalbelanja;

        if ($kembalian < 0) {
            echo "Uang tidak cukup!";
            exit;
        }

        $keranjang = $_SESSION['keranjang'];
        $customer = $_SESSION['customer'];
        $tgl_transaksi = date('Y-m-d');
        $id_pengguna = $_SESSION['username'];
        $id_member = ($customer != 'umum') ? $customer : null;

        $query = "INSERT INTO membeli (tgl_transaksi, id_pengguna, id_member) 
                  VALUES ('$tgl_transaksi', '$id_pengguna', '$id_member')";
        $koneksi->query($query);

        $id_transaksi = $koneksi->insert_id;

        foreach ($keranjang as $kode_produk => $qty) {
            if ($qty > 0) {
                $query = "SELECT * FROM produk WHERE kode_produk='$kode_produk'";
                $result = $koneksi->query($query);
                $produk = $result->fetch_assoc();
            
                $subtotal = $produk['harga_jual'] * $qty;
            
                $query = "INSERT INTO beli_detail (id_transaksi, kode_produk, harga_jual, total_harga) 
                          VALUES ('$id_transaksi', '$kode_produk', '{$produk['harga_jual']}', '$subtotal')";
                $koneksi->query($query);
            }
        }

        $query_kasir = "SELECT nama_pengguna FROM pengguna WHERE user_name='$id_pengguna'";
        $kasirjadi = $koneksi->query($query_kasir);
        $kasir_info = $kasirjadi->fetch_assoc();
        $nama_kasir = $kasir_info['nama_pengguna'];

        echo "<h1>Transaksi Berhasil!</h1>";
        echo "<p>Tanggal: $tgl_transaksi</p>";
        echo "<p>Kasir: $nama_kasir</p>";
        echo "<p>Customer: $customer</p>";
        echo "<table border='1'>";
        echo "<tr><th>Kode Produk</th><th>Nama Produk</th><th>Harga Satuan</th><th>Qty</th><th>Subtotal</th></tr>";

        foreach ($keranjang as $kode_produk => $qty) {
            if ($qty > 0) {
                $query = "SELECT * FROM produk WHERE kode_produk='$kode_produk'";
                $result = $koneksi->query($query);
                $produk = $result->fetch_assoc();
            
                $subtotal = $produk['harga_jual'] * $qty;
            
                echo "<tr>";
                echo "<td>" . $kode_produk . "</td>";
                echo "<td>" . $produk['nama_produk'] . "</td>";
                echo "<td>" . $produk['harga_jual'] . "</td>";
                echo "<td>" . $qty . "</td>";
                echo "<td>" . $subtotal . "</td>";
                echo "</tr>";
            }
        }

        echo "</table>";
        echo "<h2>Grand Total: $Totalbelanja</h2>";
        echo "<h2>Cash: $bayar</h2>";
        echo "<h2>Change: $kembalian</h2>";

        echo "<a href='index.php'>Kembali ke Beranda</a>";
        echo "<a href='logout.php'>Logout</a>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>