<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $awal = 5;
    $akhir = 20;
    $i = 0;
    $max_i = 10;
    $acc_angka = 0;

    while ($i <=$max_i) {
        $i++;
        $angka = rand($awal,$akhir);
        echo"angka ke-".$i.": ".$angka."<br>";
        $acc_angka = $acc_angka+$angka;
    }
    echo ("<br>");
    echo ("Jumlah Seluruh angka = ".$acc_angka);
    ?>
</body>
</html>