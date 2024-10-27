      <?php
        include 'koneksi.php';

        $id_transaksi = $_GET['id_transaksi'];
        $bayar = $_GET['bayar'];
        $kembalian = $_GET['kembalian'];

        $query_transaksi = "SELECT * FROM membeli WHERE id_transaksi='$id_transaksi'";
        $Habistransaksi = $koneksi->query($query_transaksi);
        $transaksi = $Habistransaksi->fetch_assoc();

        $tgl_transaksi = $transaksi['tgl_transaksi'];
        $id_pengguna = $transaksi['id_pengguna'];
        $id_member = $transaksi['id_member'];

        $query_kasir = "SELECT nama_pengguna FROM pengguna WHERE user_name='$id_pengguna'";
        $kasirjadi = $koneksi->query($query_kasir);
        $kasir_info = $kasirjadi->fetch_assoc();
        $nama_kasir = $kasir_info['nama_pengguna'];

        $customer = ($id_member) ? $id_member : 'umum';

        echo "<h1>Transaksi Berhasil!</h1>";
        echo "<p>Tanggal: $tgl_transaksi</p>";
        echo "<p>Kasir: $nama_kasir</p>";
        echo "<p>Customer: $customer</p>";
        echo "<table border='1'>";
        echo "<tr><th>Kode Produk</th><th>Nama Produk</th><th>Harga Satuan</th><th>Qty</th><th>Subtotal</th></tr>";

        $query_detail = "SELECT * FROM beli_detail WHERE id_transaksi='$id_transaksi'";
        $hsl_detail = $koneksi->query($query_detail);

        $Totalbelanja = 0;

        while ($detail = $hsl_detail->fetch_assoc()) {
            $kode_produk = $detail['kode_produk'];
            $qty = $detail['total_harga'] / $detail['harga_jual'];

            $query_produk = "SELECT * FROM produk WHERE kode_produk='$kode_produk'";
            $hsl_produk = $koneksi->query($query_produk);
            $produk = $hsl_produk->fetch_assoc();

            $subtotal = $detail['total_harga'];
            $Totalbelanja += $subtotal;

            echo "<tr>";
            echo "<td>" . $kode_produk . "</td>";
            echo "<td>" . $produk['nama_produk'] . "</td>";
            echo "<td>" . $produk['harga_jual'] . "</td>";
            echo "<td>" . $qty . "</td>";
            echo "<td>" . $subtotal . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<h2>Grand Total: $Totalbelanja</h2>";
        echo "<h2>Cash: $bayar</h2>";
        echo "<h2>Change: $kembalian</h2>";

        echo "<a href='index.php'>Kembali ke Beranda</a>";
        echo "<a href='logout.php'>Logout</a>";
        ?>