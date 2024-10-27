<html>
    <head>
        <title>Pegawai</title>
    </head>
    <body>
        <h1>Form Input Lembur Pegawai</h1>
            <!-- post nama -->
            <form action="proses.php" method="POST">
                Nama: <br> <input type="text" name="nama"><br>
            <!-- kelamin -->
            <p>Jenis Kelamin:</p>
                <input type="radio" name="kelamin" value="Laki-Laki" /> Laki-Laki <br>
                <input type="radio" name="kelamin" value="Perempuan" /> Perempuan <br>
            <!-- status -->
            <p>Status Pegawai:</p>
                <select name="pegawai">
                    <option value="Pegawai ASN">Pegawai ASN</option>
                    <option value="Pegawai P3K">Pegawain P3K</option>
                    <option value="Dosen ASN">Dosen ASN</option>
                    <option value="Dosen P3K">Dosen P3K</option>
                </select> <br>
            <!-- lembur -->
            <br> Jam Lembur: <br> <input type="text" name="lembur"><br>
            <input type="submit" name="button" value="Hitung">
            </form>
    </body>
</html>