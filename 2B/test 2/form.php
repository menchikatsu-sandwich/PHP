<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test 2</title>
</head>
<body>
    <h1>Form Input Gaji Karyawan</h1>
    <form action="proses.php" method="POST">
        Kode Karyawan: <br> <input type="text" name="kode"><br>
        Nama Karyawan: <br> <input type="text" name="nama"><br>
        Gaji Pokok: <br> <input type="text" name="gaji"><br>

        <p>Jabatan:</p>
        <select name="jabatan">
            <option value="Manajer">Manajer</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Staff">Staff</option>
        </select> <br>

        Jumlah Hari Kerja: <br> <input type="text" name="hari"><br>
        Masa Jabatan (Dalam Tahun): <br> <input type="text" name="masa"><br>
        <br>
        <input type="submit" name="button" value="Hitung Total Gaji">
    </form>
</body>
</html>