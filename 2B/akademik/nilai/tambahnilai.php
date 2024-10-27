<html>
<head>
    <title>Tambah Nilai Mahasiswa</title>
</head>
<body>
    <h3>Tambah Nilai Mahasiswa</h3>
    <form method="post" action="proses_tambah_nilai.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="number" name="semester"></td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td><input type="number" name="jumlah_sks"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="number" name="nilai_uts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="nilai_uas"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>