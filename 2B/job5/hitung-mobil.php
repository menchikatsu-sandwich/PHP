<?php echo "Tipe Kendaraan: " . $_POST['TipeKendaraan']; ?><br>
<?php echo "Pilihan Merk: " . $_POST['Pilihan']; ?><br>
<?php echo "Jumlah: " . $_POST['Jumlah']; ?><br>
<?php echo "Jam: " . $_POST['Jam']; ?>

<?php
    $perjam = 0;
    $totsewa = 0;
    $Pilihan = $_POST['Pilihan'];

    switch ($Pilihan) {
        case 'Avanza':
            $perjam = 600000;
            break;
        case 'Zenia':
            $perjam = 500000;
            break;
        case 'Innova':
            $perjam = 800000;
            break;
        case 'Vario':
            $perjam = 300000;
            break;
        case 'Supra X125':
            $perjam = 150000;
            break;
        case 'Fazio':
            $perjam = 200000;
            break;
        case 'Scoopy':
            $perjam = 100000;
            break;
    }

    $Jumlah = $_POST['Jumlah'];
    $Jam = $_POST['Jam'];
    $totsewa = $Jumlah * $Jam * $perjam;
    $disc = 0;

    if ($Jumlah >= 4) {
        $disc = 0.1 * $totsewa;
    }

    $tot = $totsewa - $disc;
?>

<?php
    echo "<h2>Ringkasan Sewa</h2>";
    echo "<p>Harga sewa per jam: Rp." . $perjam . "</p>";
    echo "<p>Total Sewa: Rp." . $totsewa . "</p>";
    echo "<p>Diskon: Rp." . $disc . "</p>";
    echo "<p>Total Bayar: Rp." . $tot . "</p>";
?>

<form method="get" action="mobil.php">
    <button type="submit">Kembali ke Form Sewa</button>
</form>