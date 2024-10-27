<!DOCTYPE html>
<html>
<head>
    <title>Sewa Kendaraan</title>
</head>
<body>

<h2>Form Sewa Kendaraan</h2>
<form method="POST" action="hitung-mobil.php">
    Tipe Kendaraan:<br>
    <select id="TipeKendaraan" name="TipeKendaraan" required>
        <option value="Mobil">Mobil</option>
        <option value="Motor">Motor</option>
    </select><br>

    Merek Kendaraan:<br>
    <select id="Pilihan" name="Pilihan" required>
        <option value="Avanza">Avanza</option>
        <option value="Zenia">Zenia</option>
        <option value="Innova">Innova</option>
        <option value="Vario">Vario</option>
        <option value="Supra X125">Supra X125</option>
        <option value="Fazio">Fazio</option>
        <option value="Scoopy">Scoopy</option>
    </select><br>

    Jumlah Kendaraan Yang Dipesan:<br>
    <input type="number" id="Jumlah" name="Jumlah" required><br>

    Jumlah Jam Sewa:<br>
    <input type="number" id="Jam" name="Jam" required><br>

    <input type="submit" value="Hitung Sewa">
</form>
</body>
</html>
