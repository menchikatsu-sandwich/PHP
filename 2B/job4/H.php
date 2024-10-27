<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $awal = 5;
    $akhir = 20;
    $i = 0;
    $max_i = 10;
    $acc_angka = 0;
    $besar = 0;

    while ($i <= $max_i) {
        $i++;
        $angka = rand($awal, $akhir);
        if ($angka > $besar) {
            $besar = $angka;
        }
        echo "angka ke-" . $i . ": " . $angka . "<br>";
        $acc_angka = $acc_angka + $angka;
    }
    echo ("<br>");
    echo ("Jumlah Seluruh angka = " . $acc_angka . "<br>");
    echo ("<span id='angkaTerbesar'></span>");
    ?>
    <button onclick="tampilkanAngkaTerbesar()">Tampilkan Angka Terbesar</button>

    <script>
        function tampilkanAngkaTerbesar() {
            var angkaTerbesar = "<?php echo "Angka yang paling besar = " . $besar; ?>";
            document.getElementById('angkaTerbesar').innerHTML =angkaTerbesar;
        }
    </script>
</body>
</html>