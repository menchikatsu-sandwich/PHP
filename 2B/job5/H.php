<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pemesanan</title>
    <script>
    function tampilkanPesanan() {
        var produk = document.getElementById("namaProduk").value;
        var kuantitas = document.getElementById("Qty").value;
        var hargaSatuan = 0;
        switch (produk) {
            case 'Nasi Goreng':
                hargaSatuan = 12000;
                break;
            case 'Nasi Lemak':
                hargaSatuan = 15000;
                break;
            case 'Nasi Kuning':
                hargaSatuan = 10000;
                break;
        }
        var pesanan = "Nama Produk: " + produk + "<br>" +
                       "Harga Satuan: Rp " + hargaSatuan + "<br>" +
                       "Kuantitas: " + kuantitas;
        document.getElementById("detailPesanan").innerHTML = pesanan;
    }
    </script>
</head>
<body>
    <form method="post">
        Pilih Produk: 
        <select name="namaProduk" id="namaProduk">
            <option value="Nasi Goreng">Nasi Goreng</option>
            <option value="Nasi Lemak">Nasi Lemak</option>
            <option value="Nasi Kuning">Nasi Kuning</option>
        </select><br>
        Kuantitas: <input type="number" name="Qty" id="Qty" value="1"><br>
        <button type="button" onclick="tampilkanPesanan()">Tampilkan Pesanan</button>
        <input type="submit" value="Hitung">
    </form>
    <div id="detailPesanan"></div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function ftotalpembayaran($vQty, $vHarga) {
            return $vQty * $vHarga;
        }
        function fDiskon($vtotpembayaran) {
            if ($vtotpembayaran >= 25000) {
                $discount = $vtotpembayaran * 0.1;
            } else {
                $discount = 0;
            }
            return $discount;
        }
        function ftotalafterDiskon($vtbayar, $vdisc) {
            return $vtbayar - $vdisc;
        }

        $namaProduk = $_POST['namaProduk'];
        $Qty = $_POST['Qty'];

        switch ($namaProduk) {
            case 'Nasi Goreng':
                $harga = 12000;
                break;
            case 'Nasi Lemak':
                $harga = 15000;
                break;
            case 'Nasi Kuning':
                $harga = 10000;
                break;
            default:
                $harga = 0;
        }

        $vtotal = ftotalpembayaran($Qty, $harga);
        $mydisk = fDiskon($vtotal);
        $after = ftotalafterDiskon($vtotal, $mydisk);
        echo "<br>Nama Produk : $namaProduk<br>";
        echo "Harga Produk : Rp $harga<br>";
        echo "Kuantiti Produk : $Qty<br><br>";

        echo "Total Pembayaran = Rp $vtotal<br>";
        echo "Diskon = Rp $mydisk<br>";
        echo "Total setelah didiskon = Rp $after<br>";
    }
    ?>
    
</body>
</html>
