<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    function ftotalpembayaran ($vQty, $vHarga) {
        return $vQty * $vHarga;
    }
    function fDiskon ( $vtotpembayaran) {
        if ($vtotpembayaran >= 50000) {
            $discount = $vtotpembayaran * 0.1;
        } else {
            $discount = 0;
        }
        return $discount;
    }
    function ftotalafterDiskon ($vtbayar, $vdisc) {
        return $vtbayar - $vdisc;
    }

    $namaProduk = "Nasi Lemak";
    $harga = 25000;
    $Qty = 5;
    $vtotal=ftotalpembayaran($Qty, $harga);
    $mydisk =fDiskon($vtotal);
    $after =ftotalAfterDiskon($vtotal,$mydisk);
    echo "Nama Produk : $namaProduk<br>";
    echo "Harga Produk : $harga<br>";
    echo "Kuantiti Produk : $Qty<br><br>";

    echo "<span id='totalbayar'></span>";
    ?>
    <button id="tombolTotal" onclick="TampilkanTotal()">Tampilkan Hasil Total</button> <BR>
    <!-- <div id="totalbayar"></div> -->
    <button id="tombolHilang" onclick="Hilangkan()">Sembunyikan Hasil</button>

    <script>
    function TampilkanTotal() {
        var totalbayar = "<?php echo "Total Pembayaran = " . $vtotal . "<br>" . "Diskon = " . $mydisk . "<br>" . "Total setelah didiskon = " . $after . "<br>"; ?>";
        document.getElementById('totalbayar').innerHTML =totalbayar;
        // document.getElementById('tombolTotal').style.display = 'none';
    }
    function Hilangkan() {
        document.getElementById('totalbayar').innerHTML ='';
    }
    </script>
</body>
</html>
