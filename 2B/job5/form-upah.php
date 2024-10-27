<!DOCTYPE html>
<html>
<head>
    <title>Masukkan Data Karyawan</title>
</head>
<body>
    <form action="upah.php" method="post">
        <label for="namaPekerja">Nama Pekerja:</label>
        <input type="text" id="namaPekerja" name="namaPekerja" required><br><br>
        <label for="golongan">Masukkan golongan karyawan (A, B, C, atau D):</label>
        <input type="text" id="golongan" name="golongan" required><br><br>
        <label for="jamKerja">Masukkan jumlah jam kerja dalam satu minggu:</label>
        <input type="number" id="jamKerja" name="jamKerja" required><br><br>
        <input type="submit" value="Hitung Upah">
    </form>
</body>
</html>